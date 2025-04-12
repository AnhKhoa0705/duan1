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
require_once 'controller/detailController.php';
require_once 'controller/productController.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
// Khai Báo thêm nếu phải truyền thêm tham số
if ($action == 'home') {
    /* 
    - Cấu trúc:
     + Gọi controler
     + Gọi view (nếu controler chưa gọi)
    */
    include 'view/home.php';
    
}  elseif ($action == 'products') {
    $Product_Controller = new productController;
    $result = $Product_Controller->category(); 
    $categoryResult = $result['category'];
    $productResult = $result['product'];
    $categoryFilter = $result['filter']; 
    include_once 'view/products.php';
}
    elseif ($action == 'product_detail') {
    $Detail_Controller = new detail_Controller;
    $Detail_Controller->get_product_detail();
}


//  ADMIN 
// require_once 'controller/adminController.php';

// $controller = new AdminController();
// $action = $_GET['action'] ?? 'products';

// if ($action == 'products') {
//     include 'view/admin/products.php';
// } elseif ($action == 'delete' && isset($_GET['id'])) {
//     $controller->deleteProduct($_GET['id']);
//     header("Location: index.php?action=products");
//     exit();
// }
require_once 'view/footer.php';
