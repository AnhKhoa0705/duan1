<?php
require_once __DIR__ . "/../model/productModel.php";

// Khởi tạo Model
$productModel = new ProductModel();

// Lấy danh mục sản phẩm
$categoryResult = $productModel->getCategories();
if (!$categoryResult || $categoryResult->num_rows == 0) {
    $categoryResult = null; // Gán null nếu không có danh mục nào
}

// Lấy danh mục được chọn từ URL
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

// Lấy danh sách sản phẩm (kèm ảnh & giá từ variant)
$productResult = $productModel->getProducts($categoryFilter);
if (!$productResult || $productResult->num_rows == 0) {
    $productResult = null; // Gán null nếu không có sản phẩm nào
}

// Bao gồm file view để hiển thị dữ liệu
require_once "../view/products.php";
?>
