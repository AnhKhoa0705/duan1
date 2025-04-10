<?php 
// Bật báo lỗi để phát hiện vấn đề
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'header.php'; 
require_once '../../controller/adminController.php';

// Khởi tạo AdminController
$adminController = new AdminController();

// Xử lý xóa sản phẩm trước khi hiển thị danh sách
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $productId = filter_var($_GET['id'], FILTER_VALIDATE_INT); // Kiểm tra ID hợp lệ
    if ($productId) {
        $adminController->deleteProduct($productId);
        // Chuyển hướng sau khi xóa để tránh lặp lại hành động
        header("Location: products.php");
        exit();
    }
}

// Lấy danh sách sản phẩm
$products = $adminController->products();
?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Danh sách sản phẩm</h2>
        <a href="add_product.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Thêm sản phẩm</a>
        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="p-3">ID</th>
                    <th class="p-3">Hình ảnh</th>
                    <th class="p-3">Tên sản phẩm</th>
                    <th class="p-3">Danh mục</th>
                    <th class="p-3">Giá giảm (%)</th>
                    <th class="p-3">Lượt xem</th>
                    <th class="p-3">Trạng thái</th>
                    <th class="p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products) && is_array($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3"><?php echo htmlspecialchars($product['ID'] ?? ''); ?></td>
                            <td class="p-3">
                                <?php if (!empty($product['Image_URL'])): ?>
                                    <img src="<?php echo htmlspecialchars($product['Image_URL']); ?>" alt="<?php echo htmlspecialchars($product['Name'] ?? ''); ?>" class="w-16 h-16 object-cover rounded">
                                <?php else: ?>
                                    <span>Không có ảnh</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-3"><?php echo htmlspecialchars($product['Name'] ?? ''); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($product['CategoryName'] ?? 'Chưa có danh mục'); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($product['Discount'] ?? '0'); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($product['Views'] ?? '0'); ?></td>
                            <td class="p-3">
                                <span class="<?php echo ($product['Status'] ?? '') == 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?> px-2 py-1 rounded">
                                    <?php echo htmlspecialchars($product['Status'] ?? 'Unknown'); ?>
                                </span>
                            </td>
                            <td class="p-3">
                                <a href="edit_product.php?id=<?php echo urlencode($product['ID'] ?? ''); ?>" class="text-blue-500 hover:underline mr-2">Sửa</a>
                                <a href="products.php?action=delete&id=<?php echo urlencode($product['ID'] ?? ''); ?>" class="text-red-500 hover:underline" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="p-3 text-center">Không có sản phẩm nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>