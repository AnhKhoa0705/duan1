<?php
require_once __DIR__ . "/db_connect.php";

class ProductDetailModel {
    private $conn;

    public function __construct() {
        $db = new Database(); // Khởi tạo class Database
        $this->conn = $db->getConnection(); // Lấy kết nối database
    }

    public function getProductDetail($productID) {
        $sql = "SELECT p.*, i.Image_URL, 
                       MIN(vo.price) AS MinPrice, 
                       MAX(vo.price) AS MaxPrice,
                       GROUP_CONCAT(DISTINCT vo.size ORDER BY vo.size ASC) AS Sizes,
                       GROUP_CONCAT(DISTINCT vo.color ORDER BY vo.color ASC) AS Colors,
                       SUM(vo.quantity) AS MaxQuantity
                FROM product p 
                LEFT JOIN image i ON p.Image_ID = i.ID
                LEFT JOIN variant v ON p.ID = v.Product_ID
                LEFT JOIN variant_option vo ON v.option_ID = vo.id
                WHERE p.ID = ?
                GROUP BY p.ID, i.Image_URL
                LIMIT 1";

        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }

        $stmt->bind_param("i", $productID);
        $stmt->execute();
        $result = $stmt->get_result();

        return ($result->num_rows > 0) ? $result : null;
    }
}
?>
