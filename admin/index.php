<?php
session_start();
require_once __DIR__ . '/../config/database.php';

// Khởi tạo kết nối database
$database = new Database();
$conn = $database->getConnection();

include_once __DIR__ . '/../admin/view/header.php';

$action = $_GET['action'] ?? 'home';

if ($action === 'home') {
    include __DIR__ . '/../admin/view/home.php';

} elseif ($action === 'categories') {
    include __DIR__ . '/../admin/view/categories.php';

} elseif ($action === 'add_category') {
    include __DIR__ . '/../admin/view/add_category.php';

} elseif ($action === 'edit_category' && isset($_GET['id'])) {
    include __DIR__ . '/../admin/view/edit_category.php';

} elseif ($action === 'products') {
    include __DIR__ . '/../admin/view/products.php';

} elseif ($action === 'add_product') {
    include __DIR__ . '/../admin/view/add_product.php';

} elseif ($action === 'edit_product' && isset($_GET['id'])) {
    include __DIR__ . '/../admin/view/edit_product.php';
    
} elseif ($action === 'orders') {
    require_once __DIR__ . '/model/orders_model.php';
    $orderModel = new OrderModel($conn); // Truyền $conn vào OrderModel

    $limit = 5; 
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    $orders = $orderModel->getOrdersPaginated($limit, $offset);
    $totalOrders = $orderModel->countAllOrders();
    $totalPages = ceil($totalOrders / $limit);

    include __DIR__ . '/view/orders.php';
} elseif ($action === 'users') {
    require_once __DIR__ . '/controller/users_controller.php';
    $usersController = new UsersController($conn); // Truyền $conn vào controller
    $usersController->handleActions();
    $users = $usersController->getUsers();
    include __DIR__ . '/view/users.php';
} else {
    echo "<main class='p-6'><h2>404 - Không tìm thấy trang</h2></main>";
}

include_once __DIR__ . '/../admin/view/footer.php';