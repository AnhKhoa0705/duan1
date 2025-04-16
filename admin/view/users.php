<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= strpos($_SESSION['message'], 'thành công') !== false ? 'success' : 'danger' ?>">
        <?= $_SESSION['message'] ?>
    </div>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>

<table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Quyền</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['ID']) ?></td>
                <td><?= htmlspecialchars($user['Username']) ?></td>
                
                <!-- Phần quyền -->
                <td>
                    <span class="role-<?= strtolower($user['Role']) ?>">
                        <?= htmlspecialchars($user['Role']) ?>
                    </span>
                    <form method="POST" class="action-form">
                        <input type="hidden" name="action" value="change_role">
                        <input type="hidden" name="user_id" value="<?= $user['ID'] ?>">
                        <input type="hidden" name="new_role" value="<?= $user['Role'] === 'Admin' ? 'User' : 'Admin' ?>">
                        <button type="submit" class="btn btn-role">
                            <?= $user['Role'] === 'Admin' ? 'Bỏ quyền' : 'Làm Admin' ?>
                        </button>
                    </form>
                </td>
                
                <!-- Phần trạng thái -->
                <td>
                    <span class="status-<?= strtolower($user['Status']) ?>">
                        <?= htmlspecialchars($user['Status']) ?>
                    </span>
                    <form method="POST" class="action-form">
                        <input type="hidden" name="action" value="change_status">
                        <input type="hidden" name="user_id" value="<?= $user['ID'] ?>">
                        <input type="hidden" name="new_status" value="<?= $user['Status'] === 'Active' ? 'Blocked' : 'Active' ?>">
                        <button type="submit" class="btn btn-status">
                            <?= $user['Status'] === 'Active' ? 'Chặn' : 'Mở chặn' ?>
                        </button>
                    </form>
                </td>
                
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<style>
    .user-table {
        width: 100%;
        border-collapse: collapse;
    }
    .user-table th, .user-table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    .user-table th {
        background-color: #f2f2f2;
    }
    .role-admin {
        color: #d32f2f;
        font-weight: bold;
    }
    .role-user {
        color: #1976d2;
    }
    .status-active {
        color: #388e3c;
    }
    .status-blocked {
        color: #f57c00;
    }
    .btn {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        margin-left: 5px;
    }
    .btn-role {
        background-color: #ffc107;
        color: #212529;
    }
    .btn-status {
        background-color: #dc3545;
        color: white;
    }
    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
    }
    .alert-success {
        background-color: #d4edda;
        color: #155724;
    }
    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
    }
</style>