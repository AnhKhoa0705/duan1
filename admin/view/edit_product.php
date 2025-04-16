<?php
require_once '../config/database.php';
require_once '../admin/model/product_model.php';
require_once '../admin/model/category_model.php';

$conn = (new Database())->getConnection();

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "<main class='p-6'>Không tìm thấy sản phẩm.</main>";
    return;
}

$product = getProductById($conn, $id);
if (!$product) {
    echo "<main class='p-6'>Sản phẩm không tồn tại.</main>";
    return;
}

$categories = getAllCategories($conn);

?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Chỉnh sửa sản phẩm</h2>
        <form action="controller/product_controller.php?action=edit" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product['ID'] ?>">

            <div class="mb-4">
                <label class="block text-gray-700">Tên sản phẩm</label>
                <input type="text" name="name" class="w-full p-2 border rounded" value="<?= htmlspecialchars($product['Name']) ?>" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Danh mục</label>
                <select name="category_id" class="w-full p-2 border rounded" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['ID'] ?>" <?= $product['Category_ID'] == $category['ID'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($category['Name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

            <div class="mb-4">
                <label class="block text-gray-700">Giảm giá (%)</label>
                <input type="number" name="discount" class="w-full p-2 border rounded" step="0.01" value="<?= $product['Discount'] ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Mô tả</label>
                <textarea name="description" class="w-full p-2 border rounded"><?= htmlspecialchars($product['Description']) ?></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Trạng thái</label>
                <select name="status" class="w-full p-2 border rounded">
                    <option value="Active" <?= $product['Status'] === 'Active' ? 'selected' : '' ?>>Active</option>
                    <option value="Inactive" <?= $product['Status'] === 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Cập nhật sản phẩm</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>
