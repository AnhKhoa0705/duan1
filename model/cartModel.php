<?php
class CartModel
{
    public static function add($product, $quantity = 1)
    {
        $id = $product['id'];
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        } else {
            $_SESSION['cart'][$id] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'image' => $product['image'],
                'quantity' => $quantity
            ];
        }
    }

    public static function update($id, $quantity)
    {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] = $quantity;
        }
    }

    public static function remove($id)
    {
        unset($_SESSION['cart'][$id]);
    }

    public static function clear()
    {
        unset($_SESSION['cart']);
    }

    public static function getAll()
    {
        return $_SESSION['cart'] ?? [];
    }

    public static function getTotal()
    {
        $total = 0;
        foreach (self::getAll() as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}
