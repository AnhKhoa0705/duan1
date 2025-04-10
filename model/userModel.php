<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getTotalUsers() {
        $stmt = $this->conn->query("SELECT COUNT(*) FROM users");
        return $stmt->fetchColumn();
    }
}
?>