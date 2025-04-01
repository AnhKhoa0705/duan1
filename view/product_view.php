<?php
require_once "../model/db_connect.php";

// Lấy danh sách danh mục
$categorySql = "SELECT * FROM category";
$categoryResult = $conn->query($categorySql);

// Lấy danh mục được chọn
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

// Truy vấn lấy dữ liệu sản phẩm theo danh mục nếu có
$sql = "SELECT * FROM product";
if (!empty($categoryFilter)) {
    $sql .= " WHERE category_id = '" . $conn->real_escape_string($categoryFilter) . "'";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevents</title>
    <link rel="stylesheet" href="../public/css/bst_men.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <p>Elevents</p>
            </div>
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

    <section class="hero-banner">
        <img src="banner.jpg" alt="Men's Collection Banner">
        <div class="hero-text">
            <h1>Bộ Sưu Tập</h1>
            <p>Thời trang đậm chất RIÊNG !</p>
        </div>
    </section>

    <section class="filter-container">
        <form method="GET">
            <label for="category">Lọc theo danh mục:</label>
            <select name="category" id="category" onchange="this.form.submit()">
                <option value="">Tất cả</option>
                <?php while ($category = $categoryResult->fetch_assoc()) { ?>
                    <option value="<?php echo $category['id']; ?>" <?php if ($categoryFilter == $category['id']) echo 'selected'; ?>>
                        <?php echo $category['name']; ?>
                    </option>
                <?php } ?>
            </select>
        </form>
    </section>

    <section class="product-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='../public/img/" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>Giá: " . number_format($row['price'], 0, ',', '.') . " VNĐ</p>";
                echo "<button>Mua ngay</button>";
                echo "</div>";
            }
        } else {
            echo "<p>Không có sản phẩm nào.</p>";
        }
        ?>
    </section>

    <footer class="footer">
        <p>© 2025 ELEVENTS LLC. All Rights Reserved.</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
