<!-- controller/adminController.php -->
<?php
require_once '../model/productModel.php';

class AdminController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function dashboard() {
        include '../view/admin/dashboard.php';
    }

    public function products() {
        $products = $this->productModel->getAllProducts();
        include '../view/admin/products.php';
    }

    public function deleteProduct($id) {
        $this->productModel->deleteProduct($id);
        header("Location: products.php");
    }

    public function categories() {
        include '../view/admin/categories.php';
    }

    public function users() {
        include '../view/admin/users.php';
    }

    public function orders() {
        include '../view/admin/orders.php';
    }
}
?>