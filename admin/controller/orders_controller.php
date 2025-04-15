<?php
require_once(__DIR__ . '../model/orders_model.php');

class OrderController {
    private $orderModel;

    public function __construct() {
        $this->orderModel = new OrderModel();
    }

    public function index() {
        $orders = $this->orderModel->getAllOrders();
        include(__DIR__ . '/../view/orders.php');
    }
}
?>
