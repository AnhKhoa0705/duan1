<?php
// Bật hiển thị lỗi để dễ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kiểm tra đường dẫn tệp database.php
if (!file_exists('../../config/database.php')) {
    die("Lỗi: Không tìm thấy tệp database.php trong thư mục config! Đường dẫn: " . realpath('../../config'));
}

// Nạp tệp kết nối cơ sở dữ liệu
require_once '../../config/database.php';
$conn = getDBConnection();

// Kiểm tra kết nối
if (!$conn) {
    die("Lỗi: Không thể kết nối đến cơ sở dữ liệu!");
}

// Truy vấn danh sách sản phẩm
try {
    $sql = "SELECT p.ID, p.Name 
            FROM product p";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Lỗi truy vấn: " . $e->getMessage());
}

// Kiểm tra header.php và footer.php
if (!file_exists('header.php')) {
    die("Lỗi: Không tìm thấy tệp header.php!");
}
if (!file_exists('footer.php')) {
    die("Lỗi: Không tìm thấy tệp footer.php!");
}
?>

<?php include 'header.php'; ?>

<main class="flex-1 p-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Danh sách sản phẩm</h2>
        <!-- Nút thêm sản phẩm mới -->
        <a href="add_product.php" class="inline-block mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Thêm sản phẩm mới</a>

        <!-- Hiển thị thông báo (nếu có) -->
        <?php if (isset($_GET['message'])): ?>
            <div class="mb-4 p-3 bg-green-100 text-green-700 border border-green-400 rounded">
                <?php echo htmlspecialchars($_GET['message']); ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['error'])): ?>
            <div class="mb-4 p-3 bg-red-100 text-red-700 border border-red-400 rounded">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="p-3">Mã sản phẩm</th>
                    <th class="p-3">Tên sản phẩm</th>
                    <th class="p-3">Giá</th>
                    <th class="p-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($products) > 0): ?>
                    <?php foreach ($products as $product): ?>
                        <?php
                        // Lấy giá từ bảng variant và variant_option
                        try {
                            $sql_price = "SELECT vo.price 
                                          FROM variant v 
                                          JOIN variant_option vo ON v.option_ID = vo.id 
                                          WHERE v.Product_ID = :product_id 
                                          LIMIT 1";
                            $stmt_price = $conn->prepare($sql_price);
                            $stmt_price->execute([':product_id' => $product['ID']]);
                            $price = $stmt_price->fetchColumn();

                            $display_price = $price ? number_format($price, 0, ',', '.') . ' VNĐ' : 'Chưa có giá';
                        } catch (PDOException $e) {
                            $display_price = 'Lỗi lấy giá: ' . $e->getMessage();
                        }
                        ?>
                        <tr class="border-b">
                            <td class="p-3"><?php echo htmlspecialchars($product['ID']); ?></td>
                            <td class="p-3"><?php echo htmlspecialchars($product['Name']); ?></td>
                            <td class="p-3"><?php echo $display_price; ?></td>
                            <td class="p-3">
                                <a href="edit_product.php?id=<?php echo $product['ID']; ?>" class="text-blue-500 hover:underline">Sửa</a>
                                <a href="delete_product.php?id=<?php echo $product['ID']; ?>" class="text-red-500 hover:underline ml-4" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="p-3 text-center">Không có sản phẩm nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>