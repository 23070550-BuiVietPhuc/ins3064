<?php
session_start();

// Đặt cookie và session cùng tên
setcookie("username", "CookieUser", time() + 3600);
$_SESSION['username'] = "SessionUser";

// Hiển thị giá trị
echo "Cookie 'username': " . ($_COOKIE['username'] ?? "chưa có") . "<br>";
echo "Session 'username': " . $_SESSION['username'];
?>
