<?php
require_once __DIR__ . '/../model/users_model.php';

class UsersController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    // Xử lý các action
    public function handleActions() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_POST['user_id'] ?? null;
            $action = $_POST['action'] ?? null;

            if ($userId && $action) {
                switch ($action) {
                    case 'change_role':
                        $newRole = $_POST['new_role'];
                        $this->changeRole($userId, $newRole);
                        break;
                    case 'change_status':
                        $newStatus = $_POST['new_status'];
                        $this->changeStatus($userId, $newStatus);
                        break;
                }
            }
        }
    }

    // Thay đổi quyền
    private function changeRole($userId, $newRole) {
        if (in_array($newRole, ['Admin', 'User'])) {
            $success = $this->userModel->updateRole($userId, $newRole);
            $_SESSION['message'] = $success 
                ? "Đã thay đổi quyền thành công!" 
                : "Có lỗi xảy ra khi thay đổi quyền!";
        }
        header("Location: index.php?action=users");
        exit();
    }

    // Thay đổi trạng thái
    private function changeStatus($userId, $newStatus) {
        if (in_array($newStatus, ['Active', 'Blocked'])) {
            $success = $this->userModel->updateStatus($userId, $newStatus);
            $_SESSION['message'] = $success 
                ? "Đã thay đổi trạng thái thành công!" 
                : "Có lỗi xảy ra khi thay đổi trạng thái!";
        }
        header("Location: index.php?action=users");
        exit();
    }

    // Lấy danh sách người dùng
    public function getUsers() {
        return $this->userModel->getAllUsers();
    }
}
?>