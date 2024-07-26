
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
