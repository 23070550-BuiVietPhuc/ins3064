<?php
// Cookie chỉ truyền qua HTTPS, hết hạn sau 1 giờ
setcookie(
    "visited", 
    "secureValue", 
    time() + 3600, 
    "/", 
    "", 
    true,   // secure flag: chỉ gửi qua HTTPS
    true    // httponly flag: không truy cập được bằng JavaScript
);
echo "Secure cookie đã được thiết lập.";
?>

<?php
if (isset($_COOKIE['visited'])) {
    echo "Chào mừng bạn quay lại!";
} else {
    echo "Xin chào, đây là lần đầu bạn ghé thăm.";
}
?>
