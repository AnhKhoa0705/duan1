<?php session_start(); ?>
<h2>Giỏ hàng</h2>
<?php if (empty($_SESSION['cart'])): ?>
    <p>Giỏ hàng trống.</p>
<?php else: ?>
    <form action="update_cart.php" method="post">
    <table border="1" cellpadding="5">
        <tr>
            <th>Hình</th><th>Tên</th><th>Size</th><th>Màu</th><th>SL</th><th>Giá</th><th>Tổng</th><th>Xóa</th>
        </tr>
        <?php
        $total = 0;
        foreach ($_SESSION['cart'] as $key => $item):
            $subtotal = $item['price'] * $item['qty'];
            $total += $subtotal;
        ?>
        <tr>
            <td><img src="<?= $item['image'] ?>" width="50"></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['size'] ?></td>
            <td><?= $item['color'] ?></td>
            <td>
                <input type="number" name="qty[<?= $key ?>]" value="<?= $item['qty'] ?>" min="1">
            </td>
            <td><?= $item['price'] ?></td>
            <td><?= $subtotal ?></td>
            <td><a href="remove_item.php?key=<?= $key ?>">X</a></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="6" align="right">Tổng:</td>
            <td colspan="2"><?= $total ?> USD</td>
        </tr>
    </table>
    <br>
    <button type="submit">Cập nhật</button>
    <a href="clear_cart.php">Xóa toàn bộ</a> |
    <a href="checkout.php">Thanh toán</a>
    </form>
<?php endif; ?>
