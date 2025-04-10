<?php
// model/productModel.php
class ProductModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getTotalProducts() {
        $stmt = $this->conn->query("SELECT COUNT(*) FROM products");
        return $stmt->fetchColumn();
    }

    public function getAllProducts() {
        $stmt = $this->conn->query("SELECT * FROM products");
        return $stmt->fetchAll();
    }

    public function deleteProduct($id) {
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>