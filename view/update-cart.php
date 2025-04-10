<?php
session_start();
foreach ($_POST['qty'] as $key => $qty) {
    if (isset($_SESSION['cart'][$key])) {
        $_SESSION['cart'][$key]['qty'] = $qty;
    }
}
header("Location: cart.php");
