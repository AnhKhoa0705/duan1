<?php include 'view/header.php'; ?>

<h2>Giỏ hàng</h2>

<?php if (empty($cartItems)) : ?>
    <p>Giỏ hàng trống.</p>
<?php else : ?>
    <form action="index.php?controller=cart&action=update" method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            <?php foreach ($cartItems as $item) : ?>
                <tr>
                    <td><img src="public/img/<?= $item['image'] ?>" width="60"></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= number_format($item['price']) ?>đ</td>
                    <td>
                        <input type="number" name="quantities[<?= $item['id'] ?>]" value="<?= $item['quantity'] ?>" min="1">
                    </td>
                    <td><?= number_format($item['price'] * $item['quantity']) ?>đ</td>
                    <td><a href="index.php?controller=cart&action=remove&id=<?= $item['id'] ?>">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" align="right"><strong>Tổng:</strong></td>
                <td colspan="2"><?= number_format($total) ?>đ</td>
            </tr>
        </table>
        <br>
        <button type="submit">Cập nhật giỏ hàng</button>
        <a href="index.php?controller=cart&action=clear">Xóa toàn bộ</a>
    </form>
<?php endif; ?>

<?php include 'view/footer.php'; ?>
