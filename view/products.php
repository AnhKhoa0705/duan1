<?php
require_once __DIR__ . "/../controller/productController.php";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevents</title>
    <link rel="stylesheet" href="../public/css/bst_men.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/278451572_10160075219507421_5192306085723883233_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFyvZ8CjUYyWL4F-H-1Lrk-8sBvteGZBjTywG-14ZkGNGtqHGq-Hd6BMxt2Q0rf-aXN0JuDM2TK9PZ-bnZNGDyr&_nc_ohc=a9ZWtO5XLPQQ7kNvgEZTIGW&_nc_oc=AdnNsSzJiIu1SDkOAxfn993HiBYqynmW74edqYljrmU5SAXhbIr5W5OzW1fqEuyVCfE&_nc_zt=23&_nc_ht=scontent.fhan3-2.fna&_nc_gid=AgfkeASvl1XPVoDa-2BD5g&oh=00_AYEc-mK9CqUOTH2MOMXA6v9ez4QQ2_cynPrTzkFBUnAEKQ&oe=67EAC745" alt="Men's Collection Banner">
        <div class="hero-text">
            <h1>Bộ Sưu Tập</h1>
            <p>Thời trang đậm chất RIÊNG !</p>
        </div>
        </div>
        </header>

        <section class="filter-container">
            <form method="GET" action="">
                <label for="category">Lọc theo danh mục:</label>
                <select name="category" id="category" onchange="this.form.submit()">
                    <option value="">Tất cả</option>
                    <?php
                    if ($categoryResult !== null) {
                        while ($category = $categoryResult->fetch_assoc()) { ?>
                            <option value="<?= htmlspecialchars($category['ID']); ?>" <?= ($categoryFilter == $category['ID']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($category['Name']); ?>
                            </option>
                    <?php }
                    } else {
                        echo "<option value=''>Không có danh mục nào</option>";
                    }
                    ?>
                </select>
            </form>
        </section>

        <section class="product-container">
            <?php
            if ($productResult !== null) {
                while ($row = $productResult->fetch_assoc()) {
                    // Xử lý ảnh (kiểm tra nếu là URL hoặc file local)
                    $imageSrc = (filter_var($row['Image_URL'], FILTER_VALIDATE_URL))
                        ? $row['Image_URL']
                        : "../public/img/" . htmlspecialchars($row['Image_URL']);

                    // Xử lý giá hiển thị
                    if (isset($row['MinPrice']) && isset($row['MaxPrice'])) {
                        if ($row['MinPrice'] == $row['MaxPrice']) {
                            $price = number_format($row['MinPrice'], 0, ',', '.') . " VNĐ";
                        } else {
                            $price = number_format($row['MinPrice'], 0, ',', '.') . " - " .
                                number_format($row['MaxPrice'], 0, ',', '.') . " VNĐ";
                        }
                    } else {
                        $price = "Liên hệ";
                    }
            ?>
                    <div class='product reveal'>
                        <img src='<?= $imageSrc; ?>' alt='<?= htmlspecialchars($row['Name']); ?>'>
                        <h3><?= htmlspecialchars($row['Name']); ?></h3>
                        <p>Giá: <?= $price; ?></p>
                        <button class="buy"
                            data-id="<?= $row['ID']; ?>"
                            data-name="<?= htmlspecialchars($row['Name']); ?>"
                            data-price="<?= $row['MinPrice']; ?>"
                            data-image="<?= $imageSrc; ?>"
                            data-size="M" 
                            data-color="Black"
                            >
                            Mua ngay
                        </button>
                    </div>
            <?php }
            } else {
                echo "<p>Không có sản phẩm nào.</p>";
            } ?>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-column">
                <h5>DỊCH VỤ</h5>
                <ul>
                    <li><a href="#">LIÊN HỆ</a></li>
                    <li><a href="#">GIAO HÀNG & TRẢ HÀNG</a></li>
                    <li><a href="#">BẢO HÀNH</a></li>
                    <li><a href="#">GIẢI ĐÁP</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5>VỀ CÔNG TY</h5>
                <ul>
                    <li><a href="#">CÂU CHUYỆN</a></li>
                    <li><a href="#">QUAN TÂM</a></li>
                    <li><a href="#">BỀN VỮNG</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5>TRẢI NGHIỆM</h5>
                <ul>
                    <li><a href="#">Tạo một chiếc sơ mi cho bạn</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5>ĐĂNG NHẬP EMAIL</h5>
                <p>Nhận được các thông tin, sự kiện của cửa hàng</p>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">GỬI</button>
                </form>
            </div>
            <div class="footer-bottom">
                <p>© 2025 ELEVENTS LLC. All Rights Reserved.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let elements = document.querySelectorAll(".reveal");

                function revealOnScroll() {
                    elements.forEach((el) => {
                        let position = el.getBoundingClientRect().top;
                        let screenHeight = window.innerHeight;
                        if (position < screenHeight - 100) {
                            el.classList.add("show");
                        }
                    });
                }
                window.addEventListener("scroll", revealOnScroll);
                revealOnScroll();
            });
        </script>
        =======

</body>

</html>