<?php
require_once './client/Models/Account.php';
class AccountController extends Account
{
     protected $Account;
     public function __construct()
     {
          $this->Account = new Account;
     }

     public function register()
     {
          try {
               if (isset($_POST['register'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $fullname = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $this->Account->registers($username, $password, $email, $fullname, $phone);
                    echo '<script type="text/javascript">';
                    echo 'Swal.fire("Thành công", "Bạn đã đăng ký thành công!", "success");';
                    echo '</script>';
               }
          } catch (PDOException $e) {
               // Nếu có lỗi, hiển thị SweetAlert2 với thông báo lỗi
               echo '<script type="text/javascript">';
               echo 'Swal.fire("Lỗi", "Có lỗi xảy ra: ' . $e->getMessage() . '", "error");';
               echo '</script>';
          }
          include_once "./Auth/register.php";
     }

     public function login()
     {
          try {
               if (isset($_POST['Login']) && ($_POST['Login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $result = $this->Account->logins($username, $password);

                    if ($result) {
                         // Đăng nhập thành công
                         echo '<script type="text/javascript">';
                         echo 'Swal.fire({
                          title: "Thành công",
                          text: "Bạn đã đăng nhập thành công!",
                          icon: "success",
                          confirmButtonText: "OK"
                            }).then((result) => {
                              if (result.isConfirmed) {
                                 window.location.href = "./"; // Chuyển đến trang chủ
                                  }
                                  });';
                         echo '</script>';
                    } else {
                         // Đăng nhập không thành công
                         echo '<script type="text/javascript">';
                         echo 'Swal.fire("Lỗi", "Đăng nhập không thành công!", "error");';
                         echo '</script>';
                    }
               }
          } catch (PDOException $e) {
               echo '<script type="text/javascript">';
               echo 'Swal.fire("Lỗi", "Đăng nhập không thành công!", "error");';
               echo '</script>';
          }

          include_once "./Auth/login.php";
     }

     public function Forgot()
     {
          if (isset($_POST['Forgot']) && ($_POST['Forgot'])) {
               $Email = $_POST['email'];
               $tieude = "FORGOT PASSWORD";
               $result = $this->Account->Forgots($Email);
               if (is_array($result)) {
                    $password = $result['password'];
               }
               var_dump($password);
               die;
               // $mail = new Mailer();
               // $mail->forgot($tieude, $password, $Email);
               // if ($result) {
               //      // Thành công
               //      echo '<script type="text/javascript">';
               //      echo 'Swal.fire("Thành Công", "Đã gửi mật khẩu về Email!", "success");';
               //      echo '</script>';
               // } else {
               //      //không thành công
               //      echo '<script type="text/javascript">';
               //      echo 'Swal.fire("Lỗi", "Email không tồn tại!", "error");';
               //      echo '</script>';
               // }

          }

          include_once "./classes/forgot.php";
     }
}
?>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div></div>