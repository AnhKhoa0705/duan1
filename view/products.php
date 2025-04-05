<?php
    require_once __DIR__ . "/header.php";
    require_once __DIR__ . "/../controller/productController.php";
    ?>

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
    <a href="product_detail.php?id=<?= $row['ID']; ?>">
        <img src='<?= $imageSrc; ?>' alt='<?= htmlspecialchars($row['Name']); ?>'>  
        <h3><?= htmlspecialchars($row['Name']); ?></h3>
    </a>
    <p>Giá: <?= $price; ?></p>
    <button class="buy">Mua ngay</button>
</div>

            <?php }
        } else {
            echo "<p>Không có sản phẩm nào.</p>";
        } ?>
    </section>
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
    <script src="https://cdn.tailwindcss.com"></script>
    </body>
    </html>
<?php  require_once __DIR__ . "/footer.php"; ?>