<?php
$gallery_items = [
    [
        'img' => 'https://scontent.fhan3-3.fna.fbcdn.net/v/t39.30808-6/483553875_1224983775853436_414039348983678511_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEzCcGiftcbXT-sDK7CIZLQLoSWBOHy6O4uhJYE4fLo7r7isQRvDYJABnf1aARtQvAQhTHyzs3VZlB3xFFzdSB7&_nc_ohc=eT59Okan7KwQ7kNvgEtuXUx&_nc_oc=AdnaZVcL9XvxN_EOzp_ZCwcLJWMxch-yWAzvrGy7aNx6kWm33espp7-6lKP2WNAsPdk&_nc_zt=23&_nc_ht=scontent.fhan3-3.fna&_nc_gid=KPDjP6nreKB1fBno5_HuOQ&oh=00_AYELiano3XduFjQa9_4d7AucQkwuzBbWpeZooR_NjM1yKQ&oe=67E44D94',
        'label' => 'NAM'
    ],
    [
        'img' => 'https://scontent.fhan3-3.fna.fbcdn.net/v/t39.30808-6/482010653_1222121486139665_7291076799455765546_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeE0zdkg8fJ8pE5KWbLr0xjtJMUksAs7gDokxSSwCzuAOkIz6VLfG90dETMJgxzEziGDoLSXSd32MjRKJk7kxzja&_nc_ohc=yJyUUZLZs54Q7kNvgHicIpg&_nc_oc=Adnn6oQnsS1gR4nDkHFzqdxN9Ob_Dn1s5KOdUOC0bRwx82oCZb3OU9hKAJ6U-StP_w8&_nc_zt=23&_nc_ht=scontent.fhan3-3.fna&_nc_gid=lkrqCiYgQ5ToFa_tAe2eqg&oh=00_AYH8lziDUSDHw5UhmhlgO-XxFEggePVoD65Gg0YESwaigg&oe=67E4272E',
        'label' => 'NỮ'
    ],
    [
        'img' => 'https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI322702300026_alternate10?$plpDeskRF$',
        'label' => 'TRẺ EM'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevents</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <div class="hero-section">
     
        <iframe
            class="hero-video"
            src="https://www.youtube.com/embed/VzqD588-uQU?si=bHPy8TSqpWkNHv37&autoplay=1&loop=1&controls=0&mute=1&playlist=VzqD588-uQU&iv_load_policy=3&modestbranding=1&start=2"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
        ></iframe>

        <!-- Overlay (to make content more readable) -->
        <div class="hero-overlay"></div>

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
                    <div class="logo">
                        <p>ELEVENTS</p>
                    </div>

                    <ul class="menu">
                        <li><a href="/index.php">TRANG CHỦ</a></li>
                        <li><a href="#">Nam</a></li>
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

        <!-- Hero content -->
        <div class="hero-content">
            <h1>ELEVENTS SPRING 2025</h1>
            <h2>ELEVENTS’ HORIZON</h2>
            <div class="hero-buttons">
                <a href="#" class="btn">MUA NGAY</a>
                <a href="#" class="btn">KHÁM PHÁ</a>
            </div>
        </div>
    </div>

    <!-- Story section -->
    <section class="story">
        <p>Đối với <b>ELEVENTS</b>, Hamptons là bức tranh thêu của những khoảnh khắc đáng trân trọng và những thú vui giản dị. Một nơi mà ông đã tụ họp cùng gia đình trong hơn 50 năm. Vẻ đẹp tự nhiên và sự thoải mái tinh tế của nơi nghỉ dưỡng ven biển yêu dấu của ông đã truyền cảm hứng cho tầm nhìn về sự thanh lịch của bờ biển và phong cách Mỹ vượt thời gian vào mùa xuân năm 2025 của ông.</p>
    </section>

    <!-- Gallery section -->
    <section class="gallery">
        <div class="gallery-item">
        <img src="https://scontent.fhan4-6.fna.fbcdn.net/v/t39.30808-6/484512969_1226858612332619_475852204440666742_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFkAYv8JpR0Riv1WSovW-kz6TeYRqalg0rpN5hGpqWDSl-CwQUOzXdn-cYmaiOfI3k_BkA28QizpGjshWWhTH8x&_nc_ohc=2k1F2xo6apkQ7kNvgH2R1-w&_nc_oc=AdmKpW6bBQKeax7stKCU7kesvkFXEGOS8UWi9GCowwR64D2ZhDEZXSToDO_PPtCDGl4&_nc_zt=23&_nc_ht=scontent.fhan4-6.fna&_nc_gid=pj1MlO39BL2tm1RgpNV3Bw&oh=00_AYFa2yv75RWJT6TeTCRUEjfoCAOzV5655KFcoXeAMjjX9A&oe=67ED6EE9" alt="Gallery Image 2">
        <a href="#" class="gallery-btn">NAM</a>
        </div>
        <div class="gallery-item">
        <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/486367944_1238064737878673_8206241466346550521_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHzKuSfh-ArR6Qz2tBl2yujMAtRkMt0G5swC1GQy3Qbm6BDzVgQ5KRgZrLdMRYkj808z6asg3rtPU-6x8aOH9dV&_nc_ohc=7OUe0hOSrDgQ7kNvgGf3aYc&_nc_oc=AdnFnrI1a8CiLfhK4EdL5RcOHMck-UyShhgXMxCOrb7Nn4OKPWVSpjvkAtLu1W3vxIQ&_nc_zt=23&_nc_ht=scontent.fhan3-2.fna&_nc_gid=FAl-U90PMOoK9gc1R8u-3Q&oh=00_AYFHKuX3mRXmGMmv8dz6rKeIZVqNyJ2JRJVOxmSTZd8C7g&oe=67ED5236" alt="Gallery Image 1">
        <a href="#" class="gallery-btn">NỮ</a>
        </div>
        <div class="gallery-item">
            <img src="https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI322702300026_alternate10?$plpDeskRF$" alt="Gallery Image 3">
            <a href="#" class="gallery-btn">TRẺ EM</a>
        </div>
    </section>

    <!-- Collection section -->
    <section class="collection">
        <img src="https://www.ralphlauren.com/on/demandware.static/-/Library-Sites-RalphLauren_NA_Library/en_US/v1742551874316/img/202502/20250211-m-tournament-looks-golf-mb/0211_m_polo_golf_mb_dsk.jpg" alt="Collection Image">
        <div class="collection-content">
            <h3>ELEVENTS SPORTS</h3>
            <p>Sự kết hợp chiết trung giữa họa tiết hoa theo phong cách bohemian và nét quyến rũ lãng mạn, giàu có, Bộ sưu tập ELEVENTS tái hiện phong cách sang trọng mới.</p>
            <div class="collection-buttons">
                <a href="#" class="btn">TÌM HIỂU THÊM</a>
            </div>
        </div>
    </section>

    <!-- Purple Label section -->
    <section class="purple-label">
        <div class="purple-label-content">
            <h3>THẾ GIỚI</h3>
            <h1>SANG TRỌNG</h1>
            <p>Khám phá các bộ sưu tập, tác phẩm mang tính biểu tượng và nhiều hơn thế nữa.</p>
            <h4>ELEVENTS</h4>
        </div>
        <div class="purple-label-slider">
            <div class="slider-container">
                <div class="slider-track">
                    <div class="slider-item">
                        <img src="https://pbs.twimg.com/media/FM3RSwYXIAQXjfQ?format=jpg&name=4096x4096" alt="Slider Image 1">
                        <p class="category-label">BỘ SƯU TẬP</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.pinimg.com/736x/cc/bb/4c/ccbb4c1b837f91062deb89dd6e4a01e1.jpg" alt="Slider Image 2">
                        <p class="category-label">NAM</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.pinimg.com/736x/75/c1/29/75c1294cb47de39ed39f4368100b1790.jpg" alt="Slider Image 3">
                        <p class="category-label">NỮ</p>
                    </div>
                    <!-- Duplicate items for infinite loop effect -->
                    <div class="slider-item">
                        <img src="https://pbs.twimg.com/media/FM3RSwYXIAQXjfQ?format=jpg&name=4096x4096" alt="Slider Image 1">
                        <p class="category-label">BỘ SƯU TẬP</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.pinimg.com/736x/cc/bb/4c/ccbb4c1b837f91062deb89dd6e4a01e1.jpg" alt="Slider Image 2">
                        <p class="category-label">NAM</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.pinimg.com/736x/75/c1/29/75c1294cb47de39ed39f4368100b1790.jpg" alt="Slider Image 3">
                        <p class="category-label">NỮ</p>
                    </div>
                </div>
            </div>
            <button class="slider-arrow left-arrow"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-arrow right-arrow"><i class="fas fa-chevron-right"></i></button>
        </div>
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
</body>
</html>