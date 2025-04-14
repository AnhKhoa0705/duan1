<?php
require_once '../../config/database.php';
require_once '../model/category_model.php';

$db = new Database();
$conn = $db->getConnection();

$action = $_GET['action'] ?? '';

if ($action === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    addCategory($conn, $_POST['name']);
    header('Location: ../index.php?action=categories');
    exit;
} elseif ($action === 'delete') {
    deleteCategory($conn, $_GET['id']);
    header('Location: ../index.php?action=categories');
    exit;
} elseif ($action === 'edit' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    updateCategory($conn, $_POST['id'], $_POST['name']);
    header('Location: ../index.php?action=categories');
    exit;
}
