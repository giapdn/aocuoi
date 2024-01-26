document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    fetch('process_login.php', {
            method: 'POST',
            body: new URLSearchParams({
                'username': username,
                'password': password,
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Hiển thị thông báo thành công bằng SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Đăng nhập thành công',
                    text: data.message,
                    timer: 3000,
                }).then(() => {
                    // Chuyển hướng sau khi đăng nhập thành công
                    window.location.href = '../index.php'; // Điều hướng đến trang index
                });
            } else {
                // Hiển thị thông báo lỗi bằng SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Đăng nhập thất bại',
                    text: data.message,
                });
            }
        })
        .catch(error => console.error('Lỗi: ' + error));
});