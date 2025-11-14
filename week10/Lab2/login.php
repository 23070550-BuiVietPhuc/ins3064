<?php
session_start();
require_once 'db.php';

// Ví dụ: giả lập login với user_id = 1 (Alice - admin)
// Thực tế bạn có thể làm form nhập username/password rồi query DB
$_SESSION['user_id'] = 2;

echo "Login thành công với user_id: " . $_SESSION['user_id'];
?>
<a href="menu.php">Xem menu</a>