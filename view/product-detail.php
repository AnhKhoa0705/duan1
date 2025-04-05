<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/../controller/detailController.php";

// Kiểm tra ID sản phẩm từ URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("<p style='color: red; text-align: center; font-size: 18px;'>Sản phẩm không tồn tại!</p>");
}

$productID = intval($_GET['id']);
$productDetail = $productModel->getProductDetail($productID);

// Kiểm tra kết quả truy vấn
if (!$productDetail || $productDetail->num_rows === 0) {
    die("<p style='color: red; text-align: center; font-size: 18px;'>Sản phẩm không tồn tại!</p>");
}

$row = $productDetail->fetch_assoc();
?>

<body class="bg-gray-100 text-gray-900">
    <!-- PRODUCT DETAIL -->
    <section class="container mx-auto mt-24 px-6">
        <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row p-8">

            <!-- Hình ảnh sản phẩm -->
            <?php
            $imagePath = "../public/img/" . $row['Image_URL'];

            // Kiểm tra nếu ảnh có trong thư mục public/img/
            if (file_exists($imagePath) && is_file($imagePath)) {
                $imageSrc = $imagePath;
            } else {
                // Nếu không có ảnh trong public/img/, sử dụng đường dẫn URL
                $imageSrc = htmlspecialchars($row['Image_URL']);
            }
            ?>

            <!-- Hình ảnh sản phẩm -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="<?= $imageSrc; ?>"
                    alt="<?= htmlspecialchars($row['Name']); ?>"
                    class="rounded-lg w-96 transform transition duration-300 hover:scale-105">
            </div>



            <!-- Thông tin sản phẩm -->
            <div class="w-full md:w-1/2 pl-8">
                <h2 class="text-3xl font-bold mb-2"><?= htmlspecialchars($row['Name']); ?></h2>
                <p class="text-lg text-yellow-500 font-semibold">
                    Giá: <?= number_format($row['MinPrice'], 0, ',', '.') . " - " . number_format($row['MaxPrice'], 0, ',', '.') . " VNĐ"; ?>
                </p>
                <p class="text-gray-700 mt-4"><?= htmlspecialchars($row['Description']); ?></p>

                <form method="POST" action="cart.php" class="mt-6">
                    <input type="hidden" name="product_id" value="<?= intval($row['ID']); ?>">

                    <label for="size" class="block font-semibold">Chọn Size:</label>
                    <select name="size" id="size" class="w-full p-2 border border-gray-300 rounded-md">
                        <?php foreach (explode(',', $row['Sizes']) as $size): ?>
                            <option value="<?= htmlspecialchars(trim($size)) ?>"><?= htmlspecialchars(trim($size)) ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="color" class="block font-semibold mt-4">Chọn Màu:</label>
                    <select name="color" id="color" class="w-full p-2 border border-gray-300 rounded-md">
                        <?php foreach (explode(',', $row['Colors']) as $color): ?>
                            <option value="<?= htmlspecialchars(trim($color)) ?>"><?= htmlspecialchars(trim($color)) ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="quantity" class="block font-semibold mt-4">Số lượng:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" max="<?= intval($row['MaxQuantity']); ?>"
                        class="w-full p-2 border border-gray-300 rounded-md">

                    <button type="submit" class="w-full mt-6 bg-black text-white py-3 rounded-md font-semibold hover:bg-yellow-500 transition">
                        Thêm vào giỏ hàng
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
<?php require_once __DIR__ . "/footer.php"; ?>