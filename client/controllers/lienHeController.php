<?php 
//session_start();
require_once "./client/models/lienHe.php";

class lienHeController{
    public $lienHe;
    public function __construct(){
        $this->lienHe = new LienHe;
    }
    public function AllLienHe(){
        $lienhe = $this->lienHe->getLienHe();
        include_once "Views/LienHe/list.php";
    }
    public function insertLienHe(){
        if(isset($_POST['submit']) && $_POST['submit']){
            
            // $error = []; // Khai báo mảng chứa lỗi
            // if(empty(trim($ten_khach_hang))){
            //     $error['ten_khach_hang']['required'] = 'Tên người dùng không được bỏ trống!';
            // } else {
            //     if(strlen(trim($ten_khach_hang))<6){ 
            //         $error['ten_khach_hang']['leght'] = 'Tên người dùng phải trên 6 ký tự';
            //     }
            // }
            // if(empty(trim($email))){
            //     $error['email']['required'] = 'Email không được bỏ trống!';
            // } else {
            //     if(strlen(trim($email))<6){ 
            //         $error['ten_khach_hang']['leght'] = 'Tên người dùng phải trên 6 ký tự';
            //     }
            // }

            // // Kiểm tra có lỗi
            // if(!empty($error)){
            //     $_SESSION['error_mess'] = $error;
            // }
            // else{
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $email = $_POST['email'];
                $dien_thoai = $_POST['dien_thoai'];
                $noi_dung = $_POST['noi_dung'];
                $addlienhe = $this->lienHe->addLienHe($ten_khach_hang,$email,$dien_thoai,$noi_dung);
                if(!$addlienhe){
                    echo '<script>alert("thêm thành công")</script>';
                //}
            }
        }
        include 'client/views/ContactUs/contactus.php';
    }
}


?>