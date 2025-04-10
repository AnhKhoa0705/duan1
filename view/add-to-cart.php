<?php
session_start();

$id = $_POST['id'];
$item = [
    'id' => $id,
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'image' => $_POST['image'],
    'qty' => $_POST['qty'],
    'size' => $_POST['size'],
    'color' => $_POST['color']
];

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

$key = $id . '_' . $_POST['size'] . '_' . $_POST['color'];
$_SESSION['cart'][$key] = $item;

header("Location: cart.php");
