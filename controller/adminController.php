<?php
<<<<<<< HEAD
// controller/adminController.php
require_once '../config/database.php';
require_once '../model/userModel.php';
require_once '../model/productModel.php';
require_once '../model/detailModel.php';
require_once '../model/orderModel.php';
=======
require_once 'model/productModel.php';
>>>>>>> bfa0242a3038fc1da1b18ad2e6fa38ed637607fa

class AdminController {
    private $userModel;
    private $productModel;
    private $detailModel;
    private $orderModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
        $this->productModel = new ProductModel($conn);
        $this->detailModel = new DetailModel($conn);
        $this->orderModel = new OrderModel($conn);
    }

    public function dashboard() {
        $totalUsers = $this->userModel->getTotalUsers();
        $totalProducts = $this->productModel->getTotalProducts();
        $totalCategories = $this->detailModel->getTotalCategories();
        $totalOrders = $this->orderModel->getTotalOrders();
        $recentOrders = $this->orderModel->getRecentOrders();

        include '../view/admin/dashboard.php';
    }

    public function deleteProduct($id) {
        $this->productModel->deleteProduct($id);
    }

    public function getProducts() {
        return $this->productModel->getAllProducts();
    }
}
?>