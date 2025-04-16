<?php
require_once '../config/database.php';
require_once '../admin/model/category_model.php';
$conn = (new Database())->getConnection();
$categories = getAllCategories($conn);
?>
<main class="p-6">
    <a href="index.php?action=add_category" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Thêm danh mục</a>
    <table class="w-full border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $cat): ?>
                <tr class="border-b">
                    <td class="p-2"><?= $cat['ID'] ?></td>
                    <td class="p-2"><?= $cat['Name'] ?></td>
                    <td class="p-2">
                    <a href="index.php?action=edit_category&id=<?= $cat['ID'] ?>" class="text-blue-500">Sửa</a> | 
                    <a href="controller/category_controller.php?action=delete&id=<?= $cat['ID'] ?>" class="text-red-500" onclick="return confirm('Xóa?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include 'footer.php'; ?>
