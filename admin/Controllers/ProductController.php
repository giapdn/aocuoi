<?php
require_once "Models/Product.php";
require_once "Models/DanhMuc.php";
class ProductController 
{
   
    protected $product;
    public $danhmuc;
    public function __construct(){
        $this->product = new Product;
        $this->danhmuc = new DanhMuc;
    }
   
    public function ListProduct()
    {
        $sanpham = $this->product->allProduct();
        include_once "Views/Product/list.php";
    }
    public function DeleteProduct(){
        if(isset($_GET['id']) && $_GET['id']){
            $id = $_GET['id'];
            $this->product->xoaProduct($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';
        }
    }
    public function AddProduct(){
        $id_dm = $this->danhmuc->getDanhMuc();
        if(isset($_POST['them'])){
            $ten_san_pham = $_POST['ten_san_pham'];
            $gia_san_pham = $_POST['gia_san_pham'];
            $img_path_default = $_FILES['img_path_default']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["img_path_default"]["name"]);
            move_uploaded_file($_FILES["img_path_default"]["tmp_name"], $target_file);
            $mo_ta_san_pham = $_POST['mo_ta_san_pham'];
            $ma_san_pham = $_POST['ma_san_pham'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $check= $this->product->themProduct($ten_san_pham,$gia_san_pham,$img_path_default,$mo_ta_san_pham,$ma_san_pham,$id_danh_muc);
            if(!$check){
                echo '<script>alert("thêm thành công")</script>';
                echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';
            }
        }
        include_once "Views/Product/add.php";
    }
    public function EditProduct(){
        $danhmuc = $this->danhmuc->getDanhMuc();
        if($_GET["url"] == "sua-product"){
            if(isset($_POST["id_san_pham"])){
                $id_san_pham = $_POST['id_san_pham'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $gia_san_pham = $_POST['gia_san_pham'];
                $img_path_default = $_FILES['img_path_default']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["img_path_default"]["name"]);
                move_uploaded_file($_FILES["img_path_default"]["tmp_name"], $target_file);
                $mo_ta_san_pham = $_POST['mo_ta_san_pham'];
                $ma_san_pham = $_POST['ma_san_pham'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $check= $this->product-> suaProduct($id_san_pham,$ten_san_pham,$gia_san_pham,$img_path_default,$mo_ta_san_pham,$ma_san_pham,$id_danh_muc);
                if(!$check){
                    echo '<script>alert("sửa thành công")</script>';
                    echo '<script>window.location.href="../admin/index.php?url=list-product"</script>';
                }
            }else{
                $id_san_pham = $_GET['id'];
                $hienThiSanPham = $this->product->hienthi($id_san_pham);
                require_once "Views/Product/edit.php";
            }
        }
    }
}

    
