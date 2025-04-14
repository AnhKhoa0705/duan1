<?php
require_once '../../config/database.php';
require_once '../model/product_model.php';

$db = new Database();
$conn = $db->getConnection();

// Kiểm tra action từ $_GET
if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
    deleteProduct($conn, $_GET['id']);
    header('Location: ../index.php?action=products');
    exit;
}

if ($_GET['action'] == 'edit') {
    $data = [
        'ID' => $_POST['id'],
        'Name' => $_POST['name'],
        'Category_ID' => $_POST['category_id'],
        'Discount' => $_POST['discount'],
        'Description' => $_POST['description'],
        'Status' => $_POST['status']
    ];

    updateProduct($conn, $data);
    header('Location: ../index.php?action=products');
}

if ($_GET['action'] == 'add') {
    $data = [
        'Name' => $_POST['Name'],
        'Category_ID' => $_POST['Category_ID'],
        'Discount' => $_POST['Discount'],
        'Description' => $_POST['Description'],
        'Status' => $_POST['Status']
    ];

    addProduct($conn, $data);
    header('Location: ../index.php?action=products');
}
