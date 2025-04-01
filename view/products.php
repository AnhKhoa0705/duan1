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
    <<<<<<< HEAD

    <header>
        <div class="navbar">
            <div class="logo"><p>Elevents</p></div>
            <ul class="menu">
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="#">NAM</a></li>
                <li><a href="#">NỮ</a></li>
                <li><a href="#">TRẺ EM</a></li>
                <li><a href="#">QUÀ</a></li>
            </ul>
            <div class="icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-bag"></i></a>
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
                    <button class="buy">Mua ngay</button>
                </div>
            <?php }
        } else {
            echo "<p>Không có sản phẩm nào.</p>";
        } ?>
    </section>


    <footer class="footer">
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
    document.addEventListener("DOMContentLoaded", function () {
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
