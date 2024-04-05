let isButtonClicked = false;

document.getElementById('register-button').addEventListener('click', function() {
    // Thực hiện các hành động khác (ví dụ: gửi biểu mẫu đăng ký)
    // Sau đó, thay đổi văn bản của nút và đánh dấu là đã nhấp vào
    this.innerText = 'Waiting...';
    isButtonClicked = true;
});

// Kiểm tra trạng thái nút sau khi trang tải lại
window.onload = function() {
    if (isButtonClicked) {
        document.getElementById('register-button').innerText = 'Waiting...';
    }
};