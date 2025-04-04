<?php
require_once __DIR__ . "../../config/database.php";

class ProductModel {
    private $conn;

    public function __construct() {
        $db = new Database(); // Khởi tạo class Database
        $this->conn = $db->getConnection(); // Lấy kết nối database
    }

    // Lấy danh sách danh mục
    public function getCategories() {
        $sql = "SELECT * FROM category";
        return $this->conn->query($sql);
    }

    // Lấy danh sách sản phẩm (có lọc theo danh mục nếu có)
    public function getProducts($categoryFilter = '') {
        $sql = "SELECT p.*, i.Image_URL, 
                       MIN(vo.price) AS MinPrice, 
                       MAX(vo.price) AS MaxPrice
                FROM product p 
                LEFT JOIN image i ON p.Image_ID = i.ID
                LEFT JOIN variant v ON p.ID = v.Product_ID
                LEFT JOIN variant_option vo ON v.option_ID = vo.id
                GROUP BY p.ID, i.Image_URL";

        if (!empty($categoryFilter)) {
            $categoryFilter = $this->conn->real_escape_string($categoryFilter);
            $sql .= " HAVING p.category_id = '" . $categoryFilter . "'";
        }

        return $this->conn->query($sql);
    }
}
?>
