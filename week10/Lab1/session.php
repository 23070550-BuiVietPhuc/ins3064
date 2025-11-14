<?php
session_start(); // bắt đầu session
$_SESSION['userid'] = 10020; // gán giá trị cho biến session
echo "Session 'userid' đã được thiết lập.";
?>

<?php 
if (isset($_SESSION['userid'])) {
    echo "Giá trị userid là: " . $_SESSION['userid'];
} else {
    echo "Session 'userid' chưa được thiết lập.";
}
?>
