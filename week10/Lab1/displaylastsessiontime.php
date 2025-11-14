<?php
session_start();

if (!isset($_SESSION['last_access'])) {
    $_SESSION['last_access'] = time();
    echo "Đây là lần truy cập đầu tiên.";
} else {
    echo "Lần truy cập cuối: " . date("Y-m-d H:i:s", $_SESSION['last_access']);
    $_SESSION['last_access'] = time(); // cập nhật lại
}
?>
