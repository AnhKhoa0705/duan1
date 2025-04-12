<?php
// config/database.php

    $host = 'localhost';
    $dbname = 'dan1';
    $username = 'root'; // Cập nhật nếu cần
    $password = '';     // Cập nhật nếu cần

    try {
        // Tạo kết nối PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Thiết lập chế độ xử lý lỗi
        echo "Kết nối thành công!";
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
?>