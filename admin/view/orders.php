<<<<<<< HEAD
=======
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    thead {
        background-color:rgb(0, 76, 255);
        color: white;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .status-completed {
        color: green;
        font-weight: bold;
    }

    .status-processing {
        color: orange;
        font-weight: bold;
    }

    .delete-link {
    color: red;
    font-weight: bold;
    text-decoration: none;
    transition: all 0.3s ease;
    }

    .delete-link:hover {
        text-decoration: underline;
        color: darkred;
        cursor: pointer;
    }

</style>

<table>
<thead>
    <tr>
        <th>Mã Đơn</th>
        <th>ID Người Dùng</th>
        <th>Họ Tên</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th>Ngày Đặt</th>
        <th>Thanh Toán</th>
        <th>Tổng Tiền</th>
        <th>Ngày Giao</th>
        <th>Thao tác</th>
        <th>Trạng Thái</th>
    </tr>
</thead>
    <tbody>
        <?php if (!empty($orders)) : ?>
            <?php foreach($orders as $order): ?>
            <tr>
                <td><?= $order['ID'] ?></td>
                <td><?= $order['User_ID'] ?></td>
                <td><?= $order['Name'] ?></td>
                <td><?= $order['Phone'] ?></td>
                <td><?= $order['Address'] ?></td>
                <td><?= $order['Order_Date'] ?></td>
                <td><?= $order['Payment_Method'] ?></td>
                <td><?= number_format($order['Total_Amount'], 0, ',', '.') ?> đ</td>
                <td><?= $order['Delivery_Date'] ?></td>
                <td class="<?= strtolower($order['Status']) === 'completed' ? 'status-completed' : 'status-processing' ?>">
                    <?= $order['Status'] ?>
                </td>
                <td>
                <a href="view/confirm_delete_order.php?id=<?= $order['ID'] ?>">Xóa</a>

            </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="11">Không có đơn hàng nào.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php if ($totalPages > 1): ?>
<div style="margin-top: 20px; text-align: center;">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="index.php?action=orders&page=<?= $i ?>" style="margin: 0 5px; padding: 8px 12px; background-color: <?= ($i == $page) ? '#0099FF' : '#eee' ?>; color: <?= ($i == $page) ? 'white' : '#333' ?>; text-decoration: none; border-radius: 4px;">
            <?= $i ?>
        </a>
    <?php endfor; ?>
</div>
<?php endif; ?>

>>>>>>> bcfb52c746ce85c85f2060e3bf0047d98a60efd4
