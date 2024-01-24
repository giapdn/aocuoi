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
            $this->category->themCategory($mota, $path);
            echo '<script>alert("Thêm danh mục thành công")</script>';
            echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
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
                move_uploaded_file($_FILES["path"]["tmp_name"], $target_file);
                $this->category->suaCategory($id, $mota, $path);
                echo '<script>alert("sửa thành công")</script>';
                echo '<script>window.location.href="../admin/index.php?url=list-category"</script>';
            } else {
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
