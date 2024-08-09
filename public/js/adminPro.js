// public/js/scripts.js
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
        window.location.href = "{{ url('admin/product/delPro') }}/" + id;
    } else {
        alert("Thao tác đã được hủy");
    }
}

function showProductDetails(productId) {
    $.ajax({
        url: `/admin/product/details/${productId}`,
        method: 'GET',
        success: function(data) {
            $('#productName').text(data.name);
            let formattedPrice = parseFloat(data.price).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
            $('#productPrice').text(formattedPrice);

            $('#productAuthor').text(data.author);
            $('#productQuantity').text(data.quantity);
            $('#productPublicationYear').text(data.publication_year);
            $('#productDescription').text(data.description);
            $('#productCategory').text(data.category_name);
            $('#productImage').attr('src', `/uploaded/${data.img}`);
            $('#productModal').modal('show');
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
            alert('Đã xảy ra lỗi khi lấy dữ liệu sản phẩm.');
        }
    });
}

document.getElementById("see-more").addEventListener("click", function() {
    var description = document.getElementById("description");
    description.classList.add("expanding");
    if (description.classList.contains("expanded")) {
        description.classList.remove("expanded");
        this.textContent = "Xem thêm";
    } else {
        description.classList.add("expanded");
        this.textContent = "Thu gọn";
    }
    setTimeout(function() {
        description.classList.remove("expanding");
    }, 500);
});
