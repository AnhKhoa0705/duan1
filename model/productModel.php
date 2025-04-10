<?php
require_once "config/database.php";

class ProductModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getCategories() {
        $sql = "SELECT * FROM category";
        $stmt = $this->conn->query($sql);
        return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public function getProducts($categoryFilter = '') {
        $sql = "SELECT p.*, i.Image_URL, 
                       MIN(vo.price) AS MinPrice, 
                       MAX(vo.price) AS MaxPrice
                FROM product p 
                LEFT JOIN image i ON p.Image_ID = i.ID
                LEFT JOIN variant v ON p.ID = v.Product_ID
                LEFT JOIN variant_option vo ON v.option_ID = vo.id";

        if (!empty($categoryFilter)) {
            $sql .= " WHERE p.category_id = ?";
        }

        $sql .= " GROUP BY p.ID, i.Image_URL";

        $stmt = $this->conn->prepare($sql);

        if (!empty($categoryFilter)) {
            $stmt->execute([$categoryFilter]);
        } else {
            $stmt->execute();
        }

        return $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public function getAllProducts() {
        return $this->getProducts();
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM product WHERE ID = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function find($id) {
        $sql = "SELECT p.*, i.Image_URL, 
                       MIN(vo.price) AS MinPrice, 
                       MAX(vo.price) AS MaxPrice
                FROM product p 
                LEFT JOIN image i ON p.Image_ID = i.ID
                LEFT JOIN variant v ON p.ID = v.Product_ID
                LEFT JOIN variant_option vo ON v.option_ID = vo.id
                WHERE p.ID = ?
                GROUP BY p.ID, i.Image_URL";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
