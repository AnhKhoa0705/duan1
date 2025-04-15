<?php
require_once '../config/database.php';

$db = new Database();
$conn = $db->getConnection();

$stmt = $conn->query("SELECT * FROM deleted_orders ORDER BY Deleted_At DESC");
$deletedOrders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main style="padding: 20px;">
    <h2>Đơn hàng đã bị xóa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Mã Đơn</th>
                <th>Họ Tên</th>
                <th>SĐT</th>
                <th>Địa Chỉ</th>
                <th>Lý Do Xóa</th>
                <th>Thời gian Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deletedOrders as $order): ?>
                <tr>
                    <td><?= $order['Order_ID'] ?></td>
                    <td><?= $order['Name'] ?></td>
                    <td><?= $order['Phone'] ?></td>
                    <td><?= $order['Address'] ?></td>
                    <td><?= $order['Reason'] ?></td>
                    <td><?= $order['Deleted_At'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
