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
    require_once 'view/home.php'
    // include_once "view/footer.php";
?>

<!-- ADMIN -->
<?php
require_once 'controller/adminController.php';

$controller = new AdminController();
$action = $_GET['action'] ?? 'products';

if ($action == 'products') {
    include 'view/admin/products.php';
} elseif ($action == 'delete' && isset($_GET['id'])) {
    $controller->deleteProduct($_GET['id']);
    header("Location: index.php?action=products");
    exit();
}
?>
