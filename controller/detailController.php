<?php
require_once __DIR__ . "../../model/detailModel.php";

// Khởi tạo Model
$productModel = new ProductDetailModel();

// Kiểm tra ID sản phẩm từ URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("<p style='color: red; text-align: center; font-size: 18px;'>Sản phẩm không tồn tại!</p>");
}

$productID = intval($_GET['id']);
$productDetail = $productModel->getProductDetail($productID);

// Kiểm tra kết quả truy vấn
if (!$productDetail || count($productDetail) === 0) {
    die("<p style='color: red; text-align: center; font-size: 18px;'>Sản phẩm không tồn tại!</p>");
}

$row = $productDetail[0]; // Lấy dòng đầu tiên trong mảng trả về

// Gọi View
require_once "../view/product_detail.php";
