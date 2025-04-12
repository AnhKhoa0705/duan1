<?php
// config/database.php
function getDBConnection() {
    $host = 'localhost';
    $dbname = 'duan1';
    $username = 'root'; // Cập nhật nếu cần
    $password = '';     // Cập nhật nếu cần

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conn;
    } catch(PDOException $e) {
        die("Lỗi kết nối: " . $e->getMessage());
    }
}
?>