<?php
class OrderModel {
    public function getAllOrders() {
        // Giả lập dữ liệu
        return [
            ['id' => 1, 'user_id' => 1, 'total' => 199.97],
            ['id' => 2, 'user_id' => 2, 'total' => 229.97]
        ];
    }

    public function countOrders() {
        return count($this->getAllOrders());
    }
}
?>