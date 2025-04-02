<?php
require_once 'db_connect.php';

class ProductModel {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
        if (!$this->conn) {
            die("Không thể kết nối đến cơ sở dữ liệu.");
        }
    }

    public function getAllProducts() {
        try {
            $query = "SELECT p.ID, p.Name, p.Discount, p.Views, p.Description, p.Status, c.Name as CategoryName, i.Image_URL 
                      FROM product p 
                      LEFT JOIN category c ON p.Category_ID = c.ID 
                      LEFT JOIN image i ON p.Image_ID = i.ID";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Lỗi truy vấn getAllProducts: " . $e->getMessage());
            return [];
        }
    }

    public function deleteProduct($id) {
        try {
            $query = "DELETE FROM product WHERE ID = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Lỗi xóa sản phẩm: " . $e->getMessage());
            return false;
        }
    }
}
?>