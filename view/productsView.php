<?php
// Bạn có thể thêm logic PHP ở đây nếu cần (ví dụ: lấy dữ liệu từ database)
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
                <li><a href="">NAM</a></li>
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

    <!-- Hero Banner -->
    <section class="hero-banner">
        <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/278451572_10160075219507421_5192306085723883233_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFyvZ8CjUYyWL4F-H-1Lrk-8sBvteGZBjTywG-14ZkGNGtqHGq-Hd6BMxt2Q0rf-aXN0JuDM2TK9PZ-bnZNGDyr&_nc_ohc=a9ZWtO5XLPQQ7kNvgEZTIGW&_nc_oc=AdnNsSzJiIu1SDkOAxfn993HiBYqynmW74edqYljrmU5SAXhbIr5W5OzW1fqEuyVCfE&_nc_zt=23&_nc_ht=scontent.fhan3-2.fna&_nc_gid=AgfkeASvl1XPVoDa-2BD5g&oh=00_AYEc-mK9CqUOTH2MOMXA6v9ez4QQ2_cynPrTzkFBUnAEKQ&oe=67EAC745" alt="Men's Collection Banner">
        <div class="hero-text">
            <h1>Bộ Sưu Tập</h1>
            <p>Thời trang đậm chất RIÊNG !</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-container" id="product-container">
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

    <script src="../public/js/product.js"></script>
</body>
</html>