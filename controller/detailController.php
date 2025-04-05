<?php
require_once __DIR__ . "../../model/detailModel.php";

// Khởi tạo Model
$productModel = new ProductDetailModel();

// Kiểm tra nếu có `id` trong URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Sản phẩm không tồn tại!");
}

$productID = intval($_GET['id']);
$productDetail = $productModel->getProductDetail($productID);

// Nếu không có sản phẩm, thông báo lỗi
if (!$productDetail || $productDetail->num_rows === 0) {
    die("Sản phẩm không tồn tại!");
}

$row = $productDetail->fetch_assoc();

// Gọi View chi tiết sản phẩm
require_once "../view/product_detail.php";
?>
