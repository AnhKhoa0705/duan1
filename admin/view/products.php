<?php
require_once '../config/database.php';
require_once '../admin/model/product_model.php';

$conn = (new Database())->getConnection();

// Lấy sản phẩm và sắp xếp theo ID tăng dần
$products = getAllProducts($conn);
usort($products, fn($a, $b) => $a['ID'] - $b['ID']);

?>

<main class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Danh sách sản phẩm</h2>
        <a href="index.php?action=add_product" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
            + Thêm sản phẩm
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 border">ID</th>
                    <th class="px-4 py-3 border">Tên sản phẩm</th>
                    <th class="px-4 py-3 border">ID Danh Mục</th>
                    <th class="px-4 py-3 border">Giảm giá</th>
                    <th class="px-4 py-3 border">Trạng thái</th>
                    <th class="px-4 py-3 border">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border"><?= $p['ID'] ?></td>
                        <td class="px-4 py-2 border"><?= htmlspecialchars($p['Name']) ?></td>
                        <td class="px-4 py-2 border"><?= htmlspecialchars($p['Category_ID']) ?></td>
                        <td class="px-4 py-2 border"><?= $p['Discount'] ?>%</td>
                        <td class="px-4 py-2 border">
                            <span class="px-2 py-1 rounded text-white <?= $p['Status'] === 'Active' ? 'bg-green-500' : 'bg-gray-400' ?>">
                                <?= $p['Status'] ?>
                            </span>
                        </td>
                        <td class="px-4 py-2 border space-x-2">
                            <a href="index.php?action=edit_product&id=<?= $p['ID'] ?>" class="text-blue-600 hover:underline">Sửa</a>
                            <a href="controller/product_controller.php?action=delete&id=<?= $p['ID'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>
