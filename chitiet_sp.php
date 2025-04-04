<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm - Elevents</title>
    <link rel="stylesheet" href="../public/css/chitiet_sp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <div class="top-bar">
                <p>INTRODUCING SPRING 2025: ELEVENTS’ HORIZON | <a href="#">KHÁM PHÁ</a></p>
                <div class="top-bar-right">
                    <a href="#">VI | VIETNAM</a>
                </div>
            </div>
            <div class="main-nav">
                <div class="logo">ELEVENTS</div>
                <ul class="menu">
                    <li><a href="/index.html">TRANG CHỦ</a></li>
                    <li><a href="#">NAM</a></li>
                    <li><a href="#">NỮ</a></li>
                    <li><a href="#">TRẺ EM</a></li>
                    <li><a href="#">KHÁM PHÁ</a></li>
                    <li><a href="#">KHUYẾN MÃI</a></li>
                </ul>
                <div class="icons">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                    <a href="#"><i class="fas fa-heart"></i></a>
                    <a href="#"><i class="fas fa-shopping-bag"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="product-images">
            <img src="https://via.placeholder.com/500" alt="Product Image" class="main-image">
            <div class="thumbnail-images">
                <img src="https://via.placeholder.com/100" alt="Thumbnail 1">
                <img src="https://via.placeholder.com/100" alt="Thumbnail 2">
                <img src="https://via.placeholder.com/100" alt="Thumbnail 3">
            </div>
        </div>
        <div class="product-info">
            <h1>Tên Sản Phẩm</h1>
            <p class="price">3,500,000 VND</p>
            <p class="description">Sản phẩm cao cấp từ ELEVENTS, mang phong cách sang trọng và hiện đại, hoàn hảo cho mọi dịp.</p>
            <div class="size-selector">
                <label for="size">Chọn kích thước:</label>
                <select id="size">
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
            </div>
            <div class="quantity-selector">
                <label for="quantity">Số lượng:</label>
                <input type="number" id="quantity" value="1" min="1">
            </div>
            <button class="btn add-to-cart">THÊM VÀO GIỎ</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 ELEVENTS. Tất cả quyền được bảo lưu.</p>
    </footer>
</body>
</html>
