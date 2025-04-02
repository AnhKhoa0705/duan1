<?php
class Database {
    private $host = "127.0.0.1";
    private $db_name = "dan1";
    private $username = "root"; // Thay bằng username của bạn
    private $password = "";     // Thay bằng password của bạn
    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8",
                $this->username,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $exception) {
            error_log("Lỗi kết nối database: " . $exception->getMessage());
            echo "Không thể kết nối đến cơ sở dữ liệu. Vui lòng kiểm tra lại thông tin kết nối.";
        }
        return $this->conn;
    }
}
?>