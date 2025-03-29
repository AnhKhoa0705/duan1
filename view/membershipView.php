<?php
    // Khai báo các thiết lập cơ bản
    $title = "Chương Trình Thành Viên";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/css/voucher.css">
</head>
<body class="bg-gray-100">
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

    <!-- Hạng thành viên -->
    <div class="max-w-7xl mx-auto p-6">
        <section class="text-center py-10">
            <h2 class="text-3xl font-bold mb-4">Hạng thành viên</h2>
            <p class="text-gray-600 mb-6">Tham gia Membership để được hưởng các quyền lợi độc quyền từ chúng tôi.</p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <?php
                    $tiers = [
                        ["name" => "Dream Starter", "benefits" => ["Voucher sinh nhật giảm 10%"]],
                        ["name" => "Dream Grower", "benefits" => ["Giảm 5% mỗi đơn hàng", "Voucher sinh nhật giảm 15%", "The White Card miễn phí"]],
                        ["name" => "Dream Chaser", "benefits" => ["Giảm 10% mỗi đơn hàng", "Voucher sinh nhật giảm 20%", "The Black Card miễn phí", "Sự kiện VIP"]],
                        ["name" => "Dream Maker", "benefits" => ["Giảm 15% mỗi đơn hàng", "Secret Birthday Gift", "The Blue Card miễn phí", "Sự kiện VIP"]]
                    ];
                    foreach ($tiers as $tier) {
                        echo '<div class="p-6 border rounded-lg shadow bg-white">';
                        echo '<h3 class="text-xl font-bold flex items-center justify-center">';
                        echo '<img src="https://png.pngtree.com/png-vector/20220926/ourmid/pngtree-shiny-gold-star-clipart-illustration-design-png-image_6216956.png" alt="Star" class="w-6 h-6 mr-2"> ' . $tier["name"] . '</h3>';
                        foreach ($tier["benefits"] as $benefit) {
                            echo '<p class="text-sm text-gray-500">' . $benefit . '</p>';
                        }
                        echo '</div>';
                    }
                ?>
            </div>
        </section>
        
        <!-- tham gia -->
        <section class="text-center py-10 bg-gray-50">
            <h2 class="text-3xl font-bold mb-4">Tham gia dễ dàng</h2>
            <p class="text-gray-600 mb-6">Nhận quà tặng độc quyền bằng cách tham gia chương trình đổi điểm thưởng của Levents!</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fas fa-user-plus text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Đăng ký</h3>
                    <p class="text-sm text-gray-500">Đăng ký bằng SĐT & địa chỉ email của bạn để bắt đầu tích lũy điểm</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fas fa-coins text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Tích điểm</h3>
                    <p class="text-sm text-gray-500">Mua hàng và hoàn thành nhiệm vụ để tích thêm điểm</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fas fa-gift text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Đổi điểm</h3>
                    <p class="text-sm text-gray-500">Sử dụng điểm để nhận thêm phần thưởng và phiếu giảm giá</p>
                </div>
            </div>
        </section>

        <!-- tích điểm -->
        <section class="text-center py-10">
            <h2 class="text-3xl font-bold mb-4">Hoạt động tích điểm</h2>
            <p class="text-gray-600 mb-6">Hoàn thành các hoạt động khác nhau để tích điểm và biến số điểm đó thành phần thưởng đặc biệt.</p>
            <p class="text-sm text-gray-500 mb-6">Tích điểm bằng cách hoàn thành các nhiệm vụ này bạn nhé!</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fab fa-facebook-f text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Theo dõi kênh Facebook</h3>
                    <p class="text-sm text-gray-500">Nhận được 1.000 điểm</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fab fa-tiktok text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Theo dõi kênh TikTok</h3>
                    <p class="text-sm text-gray-500">Nhận được 1.000 điểm</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fas fa-shopping-cart text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Tích điểm trên đơn hàng</h3>
                    <p class="text-sm text-gray-500">1 điểm = 1.000đ</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fa-brands fa-instagram text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Tích điểm trên đơn hàng</h3>
                    <p class="text-sm text-gray-500">1 điểm = 1.000đ</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fa-brands fa-youtube text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Tích điểm trên đơn hàng</h3>
                    <p class="text-sm text-gray-500">1 điểm = 1.000đ</p>
                </div>
                <div class="p-6 border rounded-lg shadow bg-white">
                    <i class="fas fa-birthday-cake text-3xl mb-4"></i>
                    <h3 class="text-lg font-semibold">Tích điểm trên đơn hàng</h3>
                    <p class="text-sm text-gray-500">1 điểm = 1.000đ</p>
                </div>
            </div>
        </section>
        
        <!-- đổi điểm -->
        <section class="text-center py-10 bg-gray-50">
            <h2 class="text-3xl font-bold mb-4">Đổi điểm nhận quà</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <div class="p-6 border rounded-lg shadow bg-white">Voucher 25k</div>
                <div class="p-6 border rounded-lg shadow bg-white">Voucher 50k</div>
                <div class="p-6 border rounded-lg shadow bg-white">Voucher 100k</div>
                <div class="p-6 border rounded-lg shadow bg-white">Voucher 200k</div>
            </div>
        </section>


        <!-- Đổi điểm -->
        <section class="text-center py-10 bg-gray-50">
            <h2 class="text-3xl font-bold mb-4">Đổi điểm nhận quà</h2>
            <p class="text-gray-600 mb-6">Sử dụng điểm thưởng hiện có của bạn để đổi các phần thưởng.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <?php
                    $vouchers = [
                        "Voucher 30K đơn 0đ" => "5.000 điểm",
                        "Voucher 50K đơn 0đ" => "10.000 điểm",
                        "Voucher 100K đơn 350K" => "20.000 điểm",
                        "Voucher 150K đơn 500K" => "30.000 điểm",
                        "Voucher 200K đơn 500K" => "40.000 điểm",
                        "Voucher 300K đơn 500K" => "50.000 điểm",
                        "Voucher 500K đơn 700K" => "90.000 điểm",
                        "Voucher 700K đơn 1 Triệu" => "110.000 điểm",
                        "Voucher 1 Triệu đơn 0đ" => "150.000 điểm"
                    ];
                    foreach ($vouchers as $voucher => $points) {
                        echo '<div class="p-6 border rounded-lg shadow bg-white text-center">';
                        echo '<i class="fas fa-ticket-alt text-3xl mb-4"></i>';
                        echo '<h3 class="font-semibold">' . $voucher . '</h3>';
                        echo '<p class="text-sm text-gray-500">' . $points . '</p>';
                        echo '<button class="mt-2 bg-black text-white py-1 px-4 rounded">Đổi</button>';
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
