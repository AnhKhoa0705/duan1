<?php
// model/orderModel.php
class OrderModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getTotalOrders() {
        $stmt = $this->conn->query("SELECT COUNT(*) FROM orders");
        return $stmt->fetchColumn();
    }

    public function getRecentOrders($limit = 5) {
        $stmt = $this->conn->prepare("SELECT ID as id, Name as customer_name, Total_Amount as total, Status as status, Order_Date as created_at 
                                     FROM orders 
                                     ORDER BY Order_Date DESC 
                                     LIMIT :limit");
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>