<?php
include "Views/header.php";
include "Views/box_left.php";
require_once "Controllers/ProductController.php";
require_once "Controllers/CategoryController.php";
require_once "Controllers/BaidangController.php";
require_once "Controllers/BaidangController.php";
$prodCtrllers = new ProductController();
$categoryCtrll = new CategoryController();
$baidangCtrll = new BaidangController();
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        include "Views/home.php";
        break;
        // Case sản phẩm ---
    // case 'list-product':
    //     $prodCtrllers->ListProduct();
    //     break;
    // case 'add-product':
    //     $prodCtrllers->AddProduct();
    //     break;
    // case 'sua-san-pham':
    //     $prodCtrllers->EditProduct();
    //     break;
    // case 'xoa-san-pham':
    //     $prodCtrllers->RemoveProduct();
    //     break;
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
        //case bài viết
    default:
        include "Views/home.php";
        break;
}
include "Views/footer.php";
