<!-- view/admin/dashboard.php -->
<?php include 'header.php'; ?>

<main class="flex-1 p-6">
    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-users text-3xl text-blue-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng tài khoản</h3>
                    <p class="text-2xl font-bold">1,234</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-box text-3xl text-green-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng sản phẩm</h3>
                    <p class="text-2xl font-bold">567</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-list text-3xl text-yellow-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng danh mục</h3>
                    <p class="text-2xl font-bold">12</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <div class="flex items-center">
                <i class="fas fa-shopping-cart text-3xl text-red-500 mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Tổng đơn hàng</h3>
                    <p class="text-2xl font-bold">89</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders Table -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Đơn hàng gần đây</h2>
        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="p-3">Mã đơn</th>
                    <th class="p-3">Khách hàng</th>
                    <th class="p-3">Tổng tiền</th>
                    <th class="p-3">Trạng thái</th>
                    <th class="p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">#1234</td>
                    <td class="p-3">Nguyễn Văn A</td>
                    <td class="p-3">2,500,000đ</td>
                    <td class="p-3">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded">Đã giao</span>
                    </td>
                    <td class="p-3">
                        <a href="#" class="text-blue-500 hover:underline">Xem</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>