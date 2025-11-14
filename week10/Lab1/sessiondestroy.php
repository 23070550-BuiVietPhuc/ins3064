<?php
session_start(); // bắt đầu session
// Xóa tất cả biến trong session
session_unset();
// Hủy toàn bộ session
session_destroy();
echo "Session đã bị hủy.";
?>
