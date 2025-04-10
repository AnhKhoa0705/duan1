<?php
require_once 'model/productModel.php';
require_once 'model/cartModel.php';

class CartController
{
    public function index()
    {
        $cartItems = CartModel::getAll();
        $total = CartModel::getTotal();
        include 'view/cart.php';
    }

    public function add()
    {
        if (isset($_GET['id'])) {
            $product = ProductModel::find($_GET['id']);
            if ($product) {
                CartModel::add($product);
            }
        }
        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    public function update()
    {
        if (!empty($_POST['quantities'])) {
            foreach ($_POST['quantities'] as $id => $qty) {
                CartModel::update($id, $qty);
            }
        }
        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    public function remove()
    {
        if (isset($_GET['id'])) {
            CartModel::remove($_GET['id']);
        }
        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    public function clear()
    {
        CartModel::clear();
        header('Location: index.php?controller=cart&action=index');
        exit;
    }
}
