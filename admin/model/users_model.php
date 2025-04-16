<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Lấy tất cả người dùng
    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM users ORDER BY ID DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Cập nhật quyền người dùng
    public function updateRole($userId, $newRole) {
        $stmt = $this->conn->prepare("UPDATE users SET Role = :role WHERE ID = :id");
        $stmt->bindParam(':role', $newRole, PDO::PARAM_STR);
        $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Cập nhật trạng thái người dùng
    public function updateStatus($userId, $newStatus) {
        $stmt = $this->conn->prepare("UPDATE users SET Status = :status WHERE ID = :id");
        $stmt->bindParam(':status', $newStatus, PDO::PARAM_STR);
        $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>