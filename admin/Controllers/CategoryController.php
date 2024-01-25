<?php
require_once "Models/Category.php";
class CategoryController
{
    //danh mục
    protected $category;
    public function __construct()
    {
        $this->category = new Category;
    }
    public function ListCategory()
    {
        $danhmuc = $this->category->AllCategory();
        include_once "Views/Category/list.php";
    }
    public function AddCategory()
    {
        if (isset($_POST['them'])) {
            $mota = $_POST['mo_ta'];
            $path = $_FILES['path']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["path"]["name"]);
            move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);
            $check =$this->category->themCategory($mota, $path);
            if(!$check){
                echo '<script>alert("Thêm danh mục thành công")</script>';
                echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
            }
        }
        include_once "Views/Category/add.php";
    }
    public function EditCategory()
    {
        if ($_GET["url"] == "sua-category") {
            if (isset($_POST["mo_ta"])) {
                $id = $_POST['id_danh_muc'];
                $mota = $_POST['mo_ta'];
                $path = $_FILES['path']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["path"]["name"]);
        
                // Kiểm tra xem có dữ liệu trong $_FILES['path']['name'] không
                if (!empty($path)) {
                    // Kiểm tra và tạo thư mục lưu trữ nếu chưa tồn tại
                    if (!is_dir($target_dir)) {
                        mkdir($target_dir, 0755, true);
                    }
                    // Kiểm tra hình ảnh có hợp lệ không
                    $check = getimagesize($_FILES['path']['tmp_name']);
                    if ($check !== false) {
                        if (move_uploaded_file($_FILES['path']['tmp_name'], $target_file)) {
                            $this->category->suaCategory($id, $mota, $path);
                            echo '<script>alert("Sửa thành công")</script>';
                            echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
                        } else {
                            die("OOP !");
                        }
                    } else {
                        $this->category->suaCategory2($id, $mota);
                        echo '<script>alert("Sửa thành công")</script>';
                        echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
                    }
                } else {
                    $this->category->suaCategory2($id, $mota);
                    echo '<script>alert("Sửa thành công")</script>';
                    echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
                }
            }
            else {
                $id = $_GET['id'];
                $hienthiCategory = $this->category->hienthiCategory($id);
                require_once "Views/Category/edit.php";
            }
        }
        
    }

    public function deleteCategory()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            $this->category->xoaCategory($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
        }
    }
}
