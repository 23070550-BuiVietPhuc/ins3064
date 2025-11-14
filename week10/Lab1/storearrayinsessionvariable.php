<?php
session_start();
$_SESSION['preferences'] = array(
    "theme" => "dark",
    "language" => "vi",
    "notifications" => true
);
echo "Mảng user preferences đã được lưu trong session.";
?>

<?php
if (isset($_SESSION['preferences'])) {
    foreach ($_SESSION['preferences'] as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
} else {
    echo "Không có preferences trong session.";
}
?>
