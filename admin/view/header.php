<?php
$action = $_GET['action'] ?? 'home';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Elevent</title>
        <!-- Include Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../public/css/style.css">
    </head>
    <body class="bg-gray-100 font-sans">
        <div class="flex h-screen">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 text-white flex flex-col">
                <div class="p-4 text-2xl font-bold border-b border-gray-700">
                    Admin Panel
                </div>
                <nav class="flex-1">
                    <a href="index.php?action=home" class="flex items-center p-4 hover:bg-gray-700 <?php echo $action === 'home' ? 'bg-gray-700' : ''; ?>">
                        <i class="fas fa-home mr-3"></i> Trang chủ
                    </a>
                    <a href="index.php?action=products" class="flex items-center p-4 hover:bg-gray-700 <?php echo $action === 'products' ? 'bg-gray-700' : ''; ?>">
                        <i class="fas fa-box mr-3"></i> Sản phẩm
                    </a>
                    <a href="index.php?action=categories" class="flex items-center p-4 hover:bg-gray-700 <?php echo $action === 'categories' ? 'bg-gray-700' : ''; ?>">
                        <i class="fas fa-list mr-3"></i> Danh Mục
                    </a>
                    <a href="index.php?action=orders" class="flex items-center p-4 hover:bg-gray-700 <?php echo $action === 'orders' ? 'bg-gray-700' : ''; ?>">
                        <i class="fas fa-shopping-cart mr-3"></i> Đơn hàng
                    </a>
                    <a href="index.php?action=users" class="flex items-center p-4 hover:bg-gray-700 <?php echo $action === 'users' ? 'bg-gray-700' : ''; ?>">
                        <i class="fas fa-users mr-3"></i> Người dùng
                    </a>
                    <a href="logout.php" class="flex items-center p-4 hover:bg-gray-700">
                        <i class="fas fa-sign-out-alt mr-3"></i> Đăng xuất
                    </a>
                </nav>
                <div class="p-4 border-t border-gray-700">
                    <a href="#" class="flex items-center p-2 hover:bg-gray-700">
                        <i class="fas fa-sign-out-alt mr-3"></i> Đăng xuất
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col">
                <!-- Header -->
                <header class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-2xl font-semibold">
                    <?php
                        $action = $_GET['action'] ?? 'home';
                        if ($action === 'home') {
                            echo 'Trang chủ';
                        } elseif ($action === 'categories') {
                            echo 'Danh mục';
                        } elseif ($action === 'products') {
                            echo 'Sản phẩm';
                        } elseif ($action === 'users') {
                            echo 'Tài khoản';
                        } elseif ($action === 'orders') {
                            echo 'Đơn hàng';
                        } else {
                            echo 'Admin Panel';
                        }
                    ?>
                </h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">Xin chào, Admin</span>
                        <img src="../public/img/avatar.png" alt="Avatar" class="w-10 h-10 rounded-full">
                    </div>
                </header>