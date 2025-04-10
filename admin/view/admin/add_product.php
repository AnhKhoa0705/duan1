<!-- view/admin/add_product.php -->
<?php include 'header.php'; ?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Thêm sản phẩm mới</h2>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block text-gray-700">Tên sản phẩm</label>
                <input type="text" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Danh mục</label>
                <select name="category_id" class="w-full p-2 border rounded" required>
                    <?php
                    require_once '../../model/db_connect.php';
                    $db = new Database();
                    $conn = $db->getConnection();
                    $query = "SELECT * FROM category WHERE Status = 'Active'";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($categories as $category) {
                        echo "<option value='{$category['ID']}'>{$category['Name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Giá giảm (%)</label>
                <input type="number" name="discount" class="w-full p-2 border rounded" step="0.01">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mô tả</label>
                <textarea name="description" class="w-full p-2 border rounded"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Trạng thái</label>
                <select name="status" class="w-full p-2 border rounded">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Thêm sản phẩm</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>