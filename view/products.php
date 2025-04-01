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
   <?php 
   include_once "../view/header.php";
   ?>
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
    <?php
    include_once "../view/footer.php";
    ?>

    <script src="../public/js/product.js"></script>
</body>
</html>