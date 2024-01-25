<?php
include "Views/header.php";
include "Views/box_left.php";
include_once "autoload.php";
// require_once "Controllers/ProductController.php";
// require_once "Controllers/CategoryController.php";
// require_once "Controllers/BaiDangController.php";
// require_once "Controllers/LienHeController.php";

$prodCtrllers = new ProductController();
$categoryCtrll = new CategoryController();
$baidangCtrll = new BaiDangController();
$lienheCtrll = new LienHeController();

$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        include "Views/dashboard.php";
        break;
        // Case sản phẩm ---
    case 'list-product':
        $prodCtrllers->ListProduct();
        break;
    case 'add-product':
        $prodCtrllers->AddProduct();
        break;
    case 'sua-product':
        $prodCtrllers->EditProduct();
        break;
    case 'xoa-product':
        $prodCtrllers->DeleteProduct();
        break;
    case 'xuat-ds-product';
        $prodCtrllers->ListExport();
        break;
    case 'import-product';
        $prodCtrllers->ListImport();
        break;
        // Case sản phẩm ---

        //case danh mục
    case 'list-category':
        $categoryCtrll->ListCategory();
        break;
    case 'add-category':
        $categoryCtrll->AddCategory();
        break;
    case 'sua-category':
        $categoryCtrll->EditCategory();
        break;
    case 'xoa-category':
        $categoryCtrll->deleteCategory();
        break;
        //case danh mục

        //case bài viết
    case 'list-baiviet':
        $baidangCtrll->ListBaidang();
        break;
    case 'add-baiviet':
        $baidangCtrll->AddBaidang();
        break;
    case 'xoa-baiviet':
        $baidangCtrll->deleteBaiViet();
        break;
    case 'sua-baiviet':
        $baidangCtrll->EditBaiViet();
        break;
    case 'export-baiviet':
        $baidangCtrll->ExportBaiViet();
        break;
    case 'import-baidang':
        $baidangCtrll->ImportBaiViet();
        break;
        //case bài viết

        //case liên hệ
    case 'list-lienhe':
        $lienheCtrll->AllLienHe();
        break;
    default:
        include "Views/dashboard.php";
        break;
}
include "Views/footer.php";
