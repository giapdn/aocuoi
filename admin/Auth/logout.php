<?php
// Khởi động phiên làm việc
session_start();

// Hủy toàn bộ phiên làm việc
session_destroy();

// Chuyển hướng trở lại trang index
header('Location: ../index.php');
exit();
