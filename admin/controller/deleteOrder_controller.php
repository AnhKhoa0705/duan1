<?php
require_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'], $_POST['reason'])) {
    $orderId = (int) $_POST['order_id'];
    $reason = trim($_POST['reason']);

    if (empty($reason)) {
        echo "Lý do xóa không được để trống.";
        exit;
    }

    try {
        $db = new Database();
        $conn = $db->getConnection();

        // Lấy thông tin đơn hàng cần xóa
        $stmtSelect = $conn->prepare("SELECT Name, Phone, Address FROM orders WHERE ID = :id");
        $stmtSelect->bindParam(':id', $orderId, PDO::PARAM_INT);
        $stmtSelect->execute();
        $order = $stmtSelect->fetch(PDO::FETCH_ASSOC);

        if ($order) {
            // Lưu thông tin vào deleted_orders
            $stmtInsert = $conn->prepare("INSERT INTO deleted_orders (Order_ID, Name, Phone, Address, Reason, Deleted_At)
                VALUES (:order_id, :name, :phone, :address, :reason, NOW())");
            $stmtInsert->execute([
                ':order_id' => $orderId,
                ':name' => $order['Name'],
                ':phone' => $order['Phone'],
                ':address' => $order['Address'],
                ':reason' => $reason
            ]);
        }

        // Xóa chi tiết đơn hàng trước
        $stmtDetail = $conn->prepare("DELETE FROM order_detail WHERE Order_ID = :id");
        $stmtDetail->bindParam(':id', $orderId, PDO::PARAM_INT);
        $stmtDetail->execute();

        // Xóa đơn hàng
        $stmtOrder = $conn->prepare("DELETE FROM orders WHERE ID = :id");
        $stmtOrder->bindParam(':id', $orderId, PDO::PARAM_INT);
        $stmtOrder->execute();

        header("Location: ../index.php?action=orders&message=Xóa thành công");
        exit;

    } catch (PDOException $e) {
        echo "Lỗi khi xóa đơn hàng: " . $e->getMessage();
    }
} else {
    echo "Thiếu dữ liệu hoặc sai phương thức.";
}
