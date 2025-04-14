<?php
require_once '../config/database.php';
require_once '../admin/model/category_model.php';
$conn = (new Database())->getConnection();

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "<main class='p-6'>Không tìm thấy danh mục.</main>";
    return;
}

$category = getCategoryById($conn, $id);
if (!$category) {
    echo "<main class='p-6'>Danh mục không tồn tại.</main>";
    return;
}
?>

<main class="p-6">
    <h2 class="text-xl font-semibold mb-4">Chỉnh sửa danh mục</h2>
    <form action="controller/category_controller.php?action=edit" method="POST">
        <input type="hidden" name="id" value="<?= $category['ID'] ?>">
        <label class="block mb-2">Tên danh mục</label>
        <input name="name" value="<?= htmlspecialchars($category['Name']) ?>" required class="border p-2 mb-4 w-full rounded" />
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Cập nhật</button>
