<!-- view/admin/categories.php -->
<?php include 'header.php'; ?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Danh sách danh mục</h2>
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Thêm danh mục</a>
        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="p-3">ID</th>
                    <th class="p-3">Tên danh mục</th>
                    <th class="p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">1</td>
                    <td class="p-3">Danh mục A</td>
                    <td class="p-3">
                        <a href="#" class="text-blue-500 hover:underline mr-2">Sửa</a>
                        <a href="#" class="text-red-500 hover:underline">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>