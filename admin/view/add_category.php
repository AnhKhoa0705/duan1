
<main class="p-6">
    <form action="controller/category_controller.php?action=add" method="POST">
        <label class="block mb-2">Tên danh mục</label>
        <input name="name" required class="border p-2 mb-4 w-full rounded" />
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Thêm</button>
    </form>
</main>
<?php include 'footer.php'; ?>
