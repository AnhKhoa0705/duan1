<?php
require_once '../config/database.php';
include_once '../admin/view/header.php';

$action = $_GET['action'] ?? 'home';

if ($action === 'home') {
    include '../admin/view/home.php';

} elseif ($action === 'categories') {
    include '../admin/view/categories.php';

} elseif ($action === 'add_category') {
    include '../admin/view/add_category.php';

} elseif ($action === 'edit_category' && isset($_GET['id'])) {
    include '../admin/view/edit_category.php';

} elseif ($action === 'products') {
    include '../admin/view/products.php';

} elseif ($action === 'add_product') {
    include '../admin/view/add_product.php';

} elseif ($action === 'orders') {
    include '../admin/view/orders.php';
    
}elseif ($action === 'users') {
    include '../admin/view/users.php';
    
} else {
    echo "<main class='p-6'><h2>404 - Không tìm thấy trang</h2></main>";
}

include_once '../admin/view/footer.php';
