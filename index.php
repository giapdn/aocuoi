<?php
include "client/Views/header.php";

$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        include "client/Views/home.php";
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
    case 'productdetail':
        include "client/Views/Product/productdetail.php";
        break;

    case 'contactus':
        include "client/Views/ContactUs/contactus.php";
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