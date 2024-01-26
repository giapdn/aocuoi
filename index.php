<?php
include "client/Views/header.php";
include_once "./helper/helper.php";
require_file("./Client/Controllers/");

require_once "./client/controllers/lienHeController.php";
$lienheCtrll = new lienHeController();
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

$Account = new AccountController();

switch ($url) {
    case '/':
        include "client/Views/home.php";
        break;
    case 'login':
        $Account->login();
        break;
    case 'register':
        $Account->register();
        break;
    case 'page':
        include "client/Views/Pages/page.php";
        break;

    case 'onepage':
        include "client/Views/Pages/onepage.php";
        break;

    case 'productpage':
        include "client/Views/Product/productpage.php";
        break;

    case 'aodaicuoi':
        include "client/Views/Product/aodaicuoi.php";
        break;

    case 'aocuoidiban':
        include "client/Views/Product/aocuoidiban.php";
        break;

    case 'aocuoilamle':
        include "client/Views/Product/aocuoilamle.php";
        break;

    case 'productdetail':
        include "client/Views/Product/productdetail.php";
        break;

    case 'contactus':
        $lienheCtrll->insertLienHe();
        
        break;

    case 'aboutus':
        include "client/Views/About/aboutus.php";
        break;

    case 'checkout':
        include "client/Views/CheckOut/checkout.php";
        break;







    case 'cart':
        include "client/Views/Cart/cart.php";
        break;

        // Case sản phẩm ---

        // Case sản phẩm ---
    default:
        include "client/Views/home.php";
        break;
}
include "client/Views/footer.php";
