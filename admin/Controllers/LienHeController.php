<?php 
require_once "Models/LienHe.php";
class LienHeController{
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
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $email = $_POST['email'];
            $dien_thoai = $_POST['dien_thoai'];
            $noi_dung = $_POST['noi_dung'];
            $addlienhe = $this->lienHe->addLienHe($ten_khach_hang,$email,$dien_thoai,$noi_dung);
        }
        include 'client/Views/ContactUs/contactus.php';
    }
    public function editLH(){
        if(isset($_POST['lh'])){
            $id_lienhe = $_GET['id_lienhe'];
            $editLH = $this->lienHe->editTrangThai($id_lienhe);
        }
    }
}


?>