<?php
class Database {
    private $host = "localhost";
    private $db_name = "dan1";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn =  new PDO("mysql:host=$this->host; dbname=$this->db_name; charset=utf8", $this->username, $this->password);
        } catch (PDOException $exception) {
            die("Lỗi kết nối database: " . $exception->getMessage());
        }

        return $this->conn;
    }
}
?>
