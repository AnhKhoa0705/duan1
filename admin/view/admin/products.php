<?php include 'header.php'; ?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Danh sách sản phẩm</h2>
        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="p-3">Mã sản phẩm</th>
                    <th class="p-3">Tên sản phẩm</th>
                    <th class="p-3">Giá</th>
                    <th class="p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Lấy danh sách sản phẩm từ controller
                $products = $controller->getProducts();
                if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3"><?php echo htmlspecialchars($product['id']); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($product['name']); ?></td>
                            <td class="p-3"><?php echo number_format($product['price'], 0, ',', '.') . 'đ'; ?></td>
                            <td class="p-3">
                                <a href="index.php?action=delete&id=<?php echo $product['id']; ?>" class="text-red-500 hover:underline" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="p-3 text-center">Không có sản phẩm nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>