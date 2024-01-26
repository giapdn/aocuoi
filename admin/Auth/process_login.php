<?php
session_start();
$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "aocuoi";

// Tạo kết nối
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra thông tin đăng nhập từ biểu mẫu
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Truy vấn kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT * FROM tb_khachhang WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    // $role = 1;
    // $role_nv = 2;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Kiểm tra mật khẩu
        if ($password === $row['password']) {
            $_SESSION['username'] = $row['username'];
            // $_SESSION['role'] = $row['role'];
            $response = [
                'success' => true,
                'message' => 'Đăng nhập thành công'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Sai mật khẩu'
            ];
        }
        // if ($row['role'] != $role && $row['role'] != $role_nv) {
        //     $response = [
        //         'success' => false,
        //         'message' => 'Tài khoản không có quyền truy cập'
        //     ];
        // }
    } else {
        $response = [
            'success' => false,
            'message' => 'Người dùng không tồn tại'
        ];
    }

    $stmt->close();
} else {
    $response = [
        'success' => false,
        'message' => 'Vui lòng điền đầy đủ thông tin'
    ];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
