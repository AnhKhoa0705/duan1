<?php include 'header.php'; ?>

<main class="flex-1 p-6">
    <!-- Thẻ Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-users text-3xl text-blue-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng tài khoản</h3>
                    <p class="text-2xl font-bold"><?php echo number_format($totalUsers, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-box text-3xl text-green-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng sản phẩm</h3>
                    <p class="text-2xl font-bold"><?php echo number_format($totalProducts, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-list text-3xl text-yellow-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng danh mục</h3>
                    <p class="text-2xl font-bold"><?php echo number_format($totalCategories, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-shopping-cart text-3xl text-red-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng đơn hàng</h3>
                    <p class="text-2xl font-bold"><?php echo number_format($totalOrders, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng Đơn hàng gần đây -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Đơn hàng gần đây</h2>
        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="p-3">Mã đơn</th>
                    <th class="p-3">Khách hàng</th>
                    <th class="p-3">Tổng tiền</th>
                    <th class="p-3">Trạng thái</th>
                    <th class="p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($recentOrders)): ?>
                    <?php foreach ($recentOrders as $order): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3">#<?php echo htmlspecialchars($order['id']); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($order['customer_name']); ?></td>
                            <td class="p-3"><?php echo number_format($order['total'], 0, ',', '.') . 'đ'; ?></td>
                            <td class="p-3">
                                <span class="<?php echo $order['status'] == 'Completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'; ?> px-2 py-1 rounded">
                                    <?php echo htmlspecialchars($order['status'] == 'Completed' ? 'Đã hoàn thành' : 'Đang xử lý'); ?>
                                </span>
                            </td>
                            <td class="p-3">
                                <a href="order_detail.php?id=<?php echo $order['id']; ?>" class="text-blue-500 hover:underline">Xem</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="p-3 text-center">Không có đơn hàng nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>