<?php
if (!isset($_GET['id'])) {
    echo "Không tìm thấy đơn hàng.";
    exit;
}
$orderId = (int) $_GET['id'];
?>

<main style="padding: 20px;">
    <h2>Xác nhận xóa đơn hàng #<?= $orderId ?></h2>
    <form action="../controller/deleteOrder_controller.php" method="POST">
        <input type="hidden" name="order_id" value="<?= $orderId ?>">
        
        <label for="reason">Lý do xóa đơn hàng:</label><br>
        <textarea name="reason" id="reason" rows="4" cols="50" required placeholder="Nhập lý do..."></textarea><br><br>
        
        <button type="submit">Xác nhận xóa</button>
        <a href="../index.php?action=orders">Hủy</a>
    </form>
</main>
