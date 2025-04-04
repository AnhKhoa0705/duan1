<?php
require_once __DIR__ . "/../config/database.php";

class ProductModel {
    private $conn;

    public function __construct() {
        $db = new Database(); // Khởi tạo class Database
        $this->conn = $db->getConnection(); // Lấy kết nối PDO
    }

    // Lấy danh sách danh mục
    public function getCategories() {
        $stmt = $this->conn->prepare("SELECT * FROM category");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy danh sách sản phẩm (có lọc theo danh mục nếu có)
    public function getProducts($categoryFilter = '') {
        $sql = "SELECT p.*, i.Image_URL, 
                       MIN(vo.price) AS MinPrice, 
                       MAX(vo.price) AS MaxPrice
                FROM product p 
                LEFT JOIN image i ON p.Image_ID = i.ID
                LEFT JOIN variant v ON p.ID = v.Product_ID
                LEFT JOIN variant_option vo ON v.option_ID = vo.id";

        if (!empty($categoryFilter)) {
            $sql .= " WHERE p.category_id = :category_id";
        }

        $sql .= " GROUP BY p.ID, i.Image_URL";

        $stmt = $this->conn->prepare($sql);

        if (!empty($categoryFilter)) {
            $stmt->bindParam(':category_id', $categoryFilter, PDO::PARAM_INT);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy tất cả sản phẩm
    public function getAllProducts() {
        try {
            $query = "SELECT p.ID, p.Name, p.Discount, p.Views, p.Description, p.Status, 
                             c.Name as CategoryName, i.Image_URL 
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

    // Xóa sản phẩm
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
