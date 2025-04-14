<!-- view/admin/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                <a href="../../admin/index.php" class="flex items-center p-4 hover:bg-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'bg-gray-700' : ''; ?>">
                    <i class="fas fa-home mr-3"></i> Trang chủ
                </a>
                <a href="index.php?action=categories" class="flex items-center p-4 hover:bg-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'bg-gray-700' : ''; ?>">
                    <i class="fas fa-list mr-3"></i> Danh mục
                </a>
                <a href="../../admin/view/products.php" class="flex items-center p-4 hover:bg-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'bg-gray-700' : ''; ?>">
                    <i class="fas fa-box mr-3"></i> Sản phẩm
                </a>
                <a href="../../admin/view/users.php" class="flex items-center p-4 hover:bg-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'users.php' ? 'bg-gray-700' : ''; ?>">
                    <i class="fas fa-users mr-3"></i> Tài khoản
                </a>
                <a href="../../admin/view/orders.php" class="flex items-center p-4 hover:bg-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'orders.php' ? 'bg-gray-700' : ''; ?>">
                    <i class="fas fa-shopping-cart mr-3"></i> Đơn hàng
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
                        $page = basename($_SERVER['PHP_SELF']);
                        switch ($page) {
                            case 'dashboard.php':
                                echo 'Trang chủ';
                                break;
                            case 'categories.php':
                                echo 'Danh mục';
                                break;
                            case 'products.php':
                                echo 'Sản phẩm';
                                break;
                            case 'users.php':
                                echo 'Tài khoản';
                                break;
                            case 'orders.php':
                                echo 'Đơn hàng';
                                break;
                            default:
                                echo 'Admin Panel';
                        }
                    ?>
                </h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Xin chào, Admin</span>
                    <img src="../public/img/avatar.png" alt="Avatar" class="w-10 h-10 rounded-full">
                </div>
            </header>