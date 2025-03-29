<?php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chương Trình Thành Viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/css/voucher.css">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="main-nav">
        <div class="logo">
            <p>ELEVENTS</p>
        </div>
        <ul class="menu">
            <li><a href="index.php">TRANG CHỦ</a></li>
            <li><a href="#">NAM</a></li>
            <li><a href="#">NỮ</a></li>
            <li><a href="#">TRẺ EM</a></li>
            <li><a href="#">KHÁM PHÁ</a></li>
            <li><a href="voucher.php">KHUYẾN MÃI</a></li>
        </ul>
        <div class="icons">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fas fa-heart"></i></a>
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
        </div>
    </div>

    <!-- Nội dung chương trình thành viên -->
    <div class="max-w-7xl mx-auto p-6">
        <section class="text-center py-10">
            <h2 class="text-3xl font-bold mb-4">Hạng thành viên</h2>
            <p class="text-gray-600 mb-6">Tham gia Membership để được hưởng các quyền lợi độc quyền từ chúng tôi.</p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <?php
                $memberships = [
                    ["Dream Starter", "Voucher sinh nhật giảm 10%"],
                    ["Dream Grower", "Giảm 5% mỗi đơn hàng", "Voucher sinh nhật giảm 15%", "The White Card miễn phí"],
                    ["Dream Chaser", "Giảm 10% mỗi đơn hàng", "Voucher sinh nhật giảm 20%", "The Black Card miễn phí", "Sự kiện VIP"],
                    ["Dream Maker", "Giảm 15% mỗi đơn hàng", "Secret Birthday Gift", "The Blue Card miễn phí", "Sự kiện VIP"]
                ];
                
                foreach ($memberships as $tier) {
                    echo '<div class="p-6 border rounded-lg shadow bg-white">';
                    echo '<h3 class="text-xl font-bold flex items-center justify-center">
                            <img src="https://png.pngtree.com/png-vector/20220926/ourmid/pngtree-shiny-gold-star-clipart-illustration-design-png-image_6216956.png" alt="Star" class="w-6 h-6 mr-2"> 
                            ' . $tier[0] . '
                          </h3>';
                    for ($i = 1; $i < count($tier); $i++) {
                        echo '<p class="text-sm text-gray-500">' . $tier[$i] . '</p>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </div>

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
</body>
</html>
