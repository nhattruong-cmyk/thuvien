document.addEventListener("DOMContentLoaded", function () {
    const productIdElement = document.getElementById("productId");
    if (!productIdElement) {
        console.error('Element with id "productId" not found.');
        return;
    }

    const productId = productIdElement.dataset.productId;
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let skip = 5;

    // Xử lý sự kiện nút "Thu gọn"

    document
        .getElementById("collapse-comments")
        .addEventListener("click", function () {
            const commentList = document.getElementById("comment-list");
            let comments = Array.from(commentList.children);
            if (comments.length > 5) {
                for (let i = 0; i < 5; i++) {
                    commentList.removeChild(commentList.lastChild);
                }
                skip -= 5;
            }
            if (skip <= 5) {
                this.style.display = "none";
            }
            document.getElementById("load-more-comments").style.display =
                "block";
        });

    document
        .getElementById("editCommentForm")
        .addEventListener("submit", function (event) {
            event.preventDefault();
            const form = this;
            const commentId = document.getElementById("editCommentId").value;
            const formData = new FormData(form);
            const commentText = formData.get("comment");
            const rating = formData.get("rating");

            if (!commentText.trim()) {
                document.getElementById("error-message").textContent =
                    "Bình luận không được để trống.";
                return;
            }

            fetch(`/comments/${commentId}`, {
                method: "PUT",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    comment: commentText,
                    rating: rating,
                }),
            })
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        return Promise.reject(response);
                    }
                })
                .then((data) => {
                    if (data.success) {
                        location.reload();
                    } else {
                        console.error(data.message);
                    }
                })
                .catch((error) => {
                    console.error(
                        "There was a problem with the fetch operation:",
                        error
                    );
                });
        });

    document.querySelectorAll(".rating-star").forEach((star) => {
        star.addEventListener("click", function () {
            const rating = this.dataset.value;
            document.getElementById("editRating").value = rating;

            document.querySelectorAll(".rating-star").forEach((star) => {
                star.textContent = star.dataset.value <= rating ? "★" : "☆";
            });
        });
    });

    function attachEditDeleteEvents() {
        document.querySelectorAll(".btn-edit-comment").forEach((button) => {
            button.addEventListener("click", function () {
                const commentId = this.dataset.id;
                const commentText = this.dataset.comment;
                const commentRating = this.dataset.rating;

                document.getElementById("editCommentId").value = commentId;
                document.getElementById("editCommentText").value = commentText;
                document.getElementById("editRating").value = commentRating;

                document.querySelectorAll("#rating-stars-modal .rating-star").forEach((star) => {
                    star.textContent = star.dataset.value <= commentRating ? "★" : "☆";
                });

                if (userStatus === 3) {
                    document.getElementById("ratingFields").style.display = "block";
                } else {
                    document.getElementById("ratingFields").style.display = "none";
                }

                const editCommentModal = new bootstrap.Modal(document.getElementById("editCommentModal"));
                editCommentModal.show();
            });
        });

        document.querySelectorAll(".btn-delete-comment").forEach((button) => {
            button.addEventListener("click", function () {
                if (!confirm("Bạn có chắc chắn muốn xóa bình luận này?"))
                    return;

                const commentId = this.dataset.id;

                fetch(`/comments/${commentId}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken,
                    },
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.success) {
                            location.reload();
                        } else {
                            // Xử lý lỗi
                        }
                    })
                    .catch((error) =>
                        console.error(
                            "There was a problem with the fetch operation:",
                            error
                        )
                    );
            });
        });
    }

    attachEditDeleteEvents();

    // Xử lý sự kiện khi nhấn nút tải thêm bình luận
    document
        .getElementById("load-more-comments")
        .addEventListener("click", function () {
            if (!productId) {
                console.error("Product ID is missing.");
                return;
            }

            fetch(`/comments/load-more`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify({
                    product_id: productId,
                    skip: skip,
                }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.comments && data.comments.length > 0) {
                        const commentList =
                            document.getElementById("comment-list");
                        data.comments.forEach((comment) => {
                            const commentItem = document.createElement("li");
                            commentItem.classList.add("comment-item");
                            commentItem.innerHTML = `
                        <div class="comment-avatar">
                            <img src="/avata/${comment.user.img
                                }" class="avatar online" />
                        </div>
                        <div class="comment-content">
                            <div class="comment-username">
                                ${comment.user.name}
                                ${Array.from({ length: 5 })
                                    .map(
                                        (_, i) =>
                                            `<span class="rating-star-display">${i < comment.rating ? "★" : "☆"
                                            }</span>`
                                    )
                                    .join("")}
                            </div>
                            <div class="comment-text">${comment.text}</div>
                            <div class="comment-time">
                                ${comment.created_at}
                                ${comment.created_at !== comment.updated_at
                                    ? `<span class="comment-edited"> (Đã chỉnh sửa lúc ${comment.updated_at})</span>`
                                    : ""
                                }
                            </div>
                            ${comment.is_user_comment
                                    ? `
                                <div class="comment-actions">
                                    <button class="btn btn-warning btn-sm btn-edit-comment" data-id="${comment.id}" data-comment="${comment.text}" data-rating="${comment.rating}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm btn-delete-comment" data-id="${comment.id}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>`
                                    : ""
                                }
                        </div>`;
                            commentList.appendChild(commentItem);
                        });

                        skip += 5;

                        if (!data.hasMoreComments) {
                            document.getElementById(
                                "load-more-comments"
                            ).style.display = "none";
                        }

                        if (skip > 5) {
                            document.getElementById(
                                "collapse-comments"
                            ).style.display = "block";
                        }

                        attachEditDeleteEvents();
                    }
                })
                .catch((error) => console.error("Error:", error));
        });

    document.querySelectorAll(".nav-link").forEach((tab) => {
        tab.addEventListener("click", function () {
            localStorage.setItem(
                "activeTab",
                this.getAttribute("data-bs-target")
            );
        });
    });

    const activeTab = localStorage.getItem("activeTab");
    const sessionActiveTab = sessionStorage.getItem("activeTab");
    const lastProductID = sessionStorage.getItem("lastProductID");

    // Kiểm tra xem phần tử input có tồn tại không trước khi lấy giá trị
    const productIdInput = document.querySelector('input[name="product_id"]');
    const currentProductID = productIdInput ? productIdInput.value : null;

    if (lastProductID !== currentProductID) {
        new bootstrap.Tab(document.querySelector("#summary-tab")).show();
        sessionStorage.setItem("lastProductID", currentProductID);
    } else if (sessionActiveTab) {
        const tabElement = document.querySelector(
            `button[data-bs-target="${sessionActiveTab}"]`
        );
        if (tabElement) {
            new bootstrap.Tab(tabElement).show();
        }
    } else if (activeTab) {
        const tabElement = document.querySelector(
            `button[data-bs-target="${activeTab}"]`
        );
        if (tabElement) {
            new bootstrap.Tab(tabElement).show();
        }
    } else {
        new bootstrap.Tab(document.querySelector("#summary-tab")).show();
    }

    if (userStatus === 3) {
        document.querySelectorAll("#rating-stars .rating-star").forEach((star) => {
            star.addEventListener("click", function () {
                const rating = this.getAttribute("data-value");
                document.getElementById("rating").value = rating;
                document
                    .querySelectorAll("#rating-stars .rating-star")
                    .forEach((s) => {
                        s.textContent =
                            s.getAttribute("data-value") <= rating ? "★" : "☆";
                    });
            });
        });
    }
    

    const flashActiveTab = "{{ session('activeTab') }}";
    if (flashActiveTab) {
        const tabElement = document.querySelector(
            `button[data-bs-target="#${flashActiveTab}"]`
        );
        if (tabElement) {
            new bootstrap.Tab(tabElement).show();
            localStorage.setItem("activeTab", `#${flashActiveTab}`);
        }
    }

    window.addEventListener("beforeunload", function () {
        sessionStorage.setItem("activeTab", localStorage.getItem("activeTab"));
        localStorage.removeItem("activeTab");
    });
});
