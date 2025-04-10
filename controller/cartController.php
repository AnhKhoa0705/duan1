<?php
require_once 'model/productModel.php';
require_once 'model/cartModel.php';

class CartController
{
    // Hiển thị giỏ hàng
    public function index()
    {
        $cartItems = CartModel::getAll();
        $total = CartModel::getTotal();
        include 'view/cart.php';
    }

    // Thêm sản phẩm vào giỏ
    public function add()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);
            $productModel = new ProductModel();
            $product = $productModel->find($id);
            if ($product) {
                CartModel::add($product);
            } else {
                // Có thể thêm log lỗi nếu sản phẩm không tồn tại
                // echo "Sản phẩm không tồn tại.";
            }
        }
        // Redirect về trang giỏ hàng
        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    // Cập nhật số lượng giỏ hàng
    public function update()
    {
        if (!empty($_POST['quantities'])) {
            foreach ($_POST['quantities'] as $id => $qty) {
                $id = intval($id);
                $qty = max(1, intval($qty));
                CartModel::update($id, $qty);
            }
        }
        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    // Xóa 1 sản phẩm khỏi giỏ
    public function remove()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);
            CartModel::remove($id);
        }
        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    // Xóa toàn bộ giỏ hàng
    public function clear()
    {
        CartModel::clear();
        header('Location: index.php?controller=cart&action=index');
        exit;
    }
}
