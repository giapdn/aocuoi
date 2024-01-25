<?php
include "Views/header.php";
include "Views/box_left.php";
require_once "Controllers/ProductController.php";
require_once "Controllers/CategoryController.php";
require_once "Controllers/BaiDangController.php";
require_once "Controllers/LienHeController.php";

$prodCtrllers = new ProductController();
$categoryCtrll = new CategoryController();
$baidangCtrll = new BaiDangController();
$lienheCtrll = new LienHeController();

$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        include "Views/home.php";
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
    case 'sort-delete-product':
        $prodCtrllers->SortDeleteProduct();
        break;
    case 'search-product':
        $prodCtrllers->SearchProduct();
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
    case 'xoasort-category':
        $categoryCtrll->deleteSortCategory();
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
    case 'search-baiviet':
        $baidangCtrll->SearchBaiViet();
        break;
        //case bài viết

        //case liên hệ
    case 'list-lienhe':
        $lienheCtrll->AllLienHe();
        break;
    default:
        include "Views/home.php";
        break;
}
include "Views/footer.php";
