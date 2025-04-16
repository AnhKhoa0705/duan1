


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../config/database.php'; // dùng đường dẫn tuyệt đối an toàn

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

if ($stmt->rowCount() > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th><th>Username</th><th>Password</th>
            <th>Name</th><th>Phone</th><th>Email</th>
            <th>Role</th><th>Status</th>
          </tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Password']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Phone']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Role']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Status']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}
?>
