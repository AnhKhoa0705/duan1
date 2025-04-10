<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "Bạn cần <a href='login.php'>đăng nhập</a> để thanh toán.";
} else {
    echo "Tiến hành thanh toán đơn hàng...";
}
