<?php
require_once __DIR__ . "../../model/productModel.php";

$productModel = new ProductModel();

$categoryResult = $productModel->getCategories();
if (!$categoryResult || count($categoryResult) === 0) {
    $categoryResult = null;
}

$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

$productResult = $productModel->getProducts($categoryFilter);
if (!$productResult || count($productResult) === 0) {
    $productResult = null;
}

require_once "../view/products.php";
?>
