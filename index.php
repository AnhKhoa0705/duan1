<?php
session_start();

// Bao gồm tệp database.php để lấy $conn
require_once 'config/database.php';

// Phần ADMIN
require_once 'controller/adminController.php';

// Khởi tạo AdminController với $conn
$controller = new AdminController($conn);

// Xử lý action
$action = $_GET['action'] ?? 'products';

if ($action == 'products') {
    include 'view/admin/products.php';
} elseif ($action == 'delete' && isset($_GET['id'])) {
    $controller->deleteProduct($_GET['id']);
    header("Location: index.php?action=products");
    exit();
}

// Phần điều hướng khác (bị comment)
// if (isset($_GET['mod'])) {
//     switch ($_GET['mod']) {
//         case 'product':
//             include_once 'controllers/productController.php';
//             break;
//         case 'categories':
//             include_once 'controllers/categoriesController.php';
//             break;
//         default:
//             header("Location: ?mod=page&act=home");
//             break;
//     }
// } else {
//     header("Location: ?mod=page&act=home");
// }

// include_once "view/header.php";
require_once 'view/home.php';
// include_once "view/footer.php";
?>