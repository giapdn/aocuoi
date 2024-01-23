<?php

require_once "Models/baidang.php";
class BaiDangController
{

    protected $use;
    protected $baidang;
    public function __construct()
    {
        $this->use = new khachhang;
        $this->baidang = new baidang;
    }
    //bài đăng
    public function ListBaidang()
    {
        $baidang = $this->baidang->AllBaidang();
        include_once "Views/baiviet/list.php";
    }
    public function AddBaidang()
    {
        $listusername = $this->use->getAllusername();
        if (isset($_POST['them'])) {
            $tieu_de = $_POST['tieu_de'];
            $noi_dung = $_POST['noi_dung'];
            $path = $_FILES['path']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["path"]["name"]);
            move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);
            $username = $_POST['username'];
            $check = $this->baidang->thembaiviet($tieu_de, $noi_dung, $path, $username);
            if (!$check) {
                echo '<script>alert("them thành công")</script>';
                echo '<script>window.location.href="../admin/index.php?url=list-baiviet"</script>';
            }
        }
        include_once "Views/baiviet/add.php";
    }
    public function deleteBaiViet()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            $this->baidang->xoaBaiViet($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href="../admin/index.php?url=list-baiviet"</script>';
        }
    }
    public function EditBaiViet()
    {
        $listusername = $this->use->getAllusername();
        if (isset($_POST['sua'])) {
        }

        if ($_GET["url"] == "sua-baiviet") {
            if (isset($_POST["id_bai_dang"])) {
                $id = $_POST['id_bai_dang'];
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $path = $_FILES['path']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["path"]["name"]);
                move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);
                $username = $_POST['username'];
                $check = $this->baidang->suaBaiViet($id, $tieu_de, $noi_dung, $path, $username);
                if (!$check) {
                    echo '<script>alert("sửa thành công")</script>';
                    echo '<script>window.location.href="../admin/index.php?url=list-baiviet"</script>';
                }
            } else {
                $id = $_GET['id'];
                $hienThiBaiViet = $this->baidang->hienthi($id);
                require_once "Views/baiviet/sua.php";
            }
        }
    }
    // public function search(){
    //     if (isset($_POST['btn'])) {
    //         $tieu_de = isset($_POST['noidung']) ? $_POST['noidung'] : '';
    //         $ketqua =$this->baidang-> timkiem($tieu_de);
    //         if ($ketqua) {
    //             foreach ($ketqua as $baidang) {
    //                 echo $baidang['tieu_de'] . '<br>';
    //             }
    //         } else {
    //             echo 'Không tìm thấy kết quả nào.';
    //         }
    //     }
    // }
}
