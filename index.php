<?php
session_start();

// if (isset($_GET['mod'])){
//     switch ($_GET['mod']){
//         case 'product':
//             include_once 'controllers/productController.php';
//             break;
//         case 'categories':
//             include_once 'controllers/categoriesController.php';
//             break;
//         default:
//             header(header: "Location: ?mod=page&act=home");
//             break;

//     }
// }else{
//     header(header: "Location: ?mod=page&act=home"); 
// };

// include_once "view/header.php";
// include_once "view/footer.php";
require_once 'view/header.php';
// user

if ($action == 'home') {
    include 'view/home.php';
    
}
require_once 'view/footer.php';
