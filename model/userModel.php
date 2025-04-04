<?php
class UserModel {
    public function getAllUsers() {
        // Giả lập dữ liệu (thay bằng truy vấn database thực tế)
        return [
            ['id' => 1, 'name' => 'User 1', 'email' => 'user1@example.com'],
            ['id' => 2, 'name' => 'User 2', 'email' => 'user2@example.com']
        ];
    }

    public function countUsers() {
        return count($this->getAllUsers());
    }
}
?>