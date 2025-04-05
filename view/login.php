<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/../model/db_connect.php"; // Import kết nối database

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra kết nối database
    if (!$conn) {
        die("Lỗi kết nối database.");
    }

    // Prepare và thực thi câu lệnh
    $stmt = $conn->prepare("SELECT Password FROM users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if (password_verify($password, $db_password)) {
            $message = "Login successful";
            $toastClass = "bg-success";
            session_start();
            $_SESSION['email'] = $email;
            header("Location: home.php");
            exit();
        } else {
            $message = "Incorrect password";
            $toastClass = "bg-danger";
        }
    } else {
        $message = "Email not found";
        $toastClass = "bg-warning";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Đăng nhập</title>
    <style>
        .password-container {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: gray;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container p-5 d-flex flex-column align-items-center">
        <?php if ($message): ?>
            <div class="toast align-items-center text-white <?php echo $toastClass; ?> border-0" 
                 role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo $message; ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" 
                            data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        <?php endif; ?>

        <form action="" method="post" class="form-control mt-5 p-4" 
              style="height:auto; width:380px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, 
              rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
            <div class="row text-center">
                <i class="fa fa-user-circle-o fa-3x mt-1 mb-2" style="color: green;"></i>
                <h5 class="p-4" style="font-weight: 700;">Đăng nhập</h5>
            </div>
            <div class="col-mb-3">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <label class="block font-medium mt-3">Mật khẩu</label>
            <div class="relative">
                <input type="password" name="password" id="password" class="w-full border rounded-md p-2 pr-10 mt-1" required>
                <i class="fa fa-eye absolute right-3 top-3 cursor-pointer text-gray-500" id="togglePassword"></i>
            </div>
            <div class="col mb-3 mt-3 text-center">
                <button type="submit" class="btn btn-success bg-success" style="font-weight: 600;">Đăng Nhập</button>
            </div>
            <div class="col text-center mt-4">
                <p style="font-weight: 600; color: navy;">
                    <a href="register.php" style="text-decoration: none;">Tạo tài khoản</a>
                    &nbsp;&nbsp;hoặc&nbsp;&nbsp;
                    <a href="resetpassword.php" style="text-decoration: none;">Quên mật khẩu</a>
                </p>
            </div>
        </form>
    </div>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function () {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            }
        });

        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { delay: 3000 });
        });
        toastList.forEach(toast => toast.show());
    </script>
</body>
</html>
