<?php
session_start();

// Nếu chưa có thời gian bắt đầu thì gán
if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = time();
}

// Kiểm tra timeout (30 phút = 1800 giây)
if (time() - $_SESSION['last_activity'] > 1800) {
    session_unset();
    session_destroy();
    echo "Session đã hết hạn sau 30 phút không hoạt động.";
} else {
    $_SESSION['last_activity'] = time(); // cập nhật thời gian hoạt động
    echo "Session vẫn còn hiệu lực.";
}
?>


