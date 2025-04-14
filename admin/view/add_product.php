<?php
require_once '../config/database.php';
require_once '../admin/model/category_model.php';
$conn = (new Database())->getConnection();
$categories = getAllCategories($conn);
?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Thêm sản phẩm mới</h2>
        <form action="controller/product_controller.php?action=add" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block text-gray-700">Tên sản phẩm</label>
                <input type="text" name="Name" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Danh mục</label>
                <select name="Category_ID" class="w-full p-2 border rounded" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['ID'] ?>"><?= $category['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Giảm giá (%)</label>
                <input type="number" name="Discount" class="w-full p-2 border rounded" step="0.01">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Mô tả</label>
                <textarea name="Description" class="w-full p-2 border rounded"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Trạng thái</label>
                <select name="Status" class="w-full p-2 border rounded">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Thêm sản phẩm</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>
