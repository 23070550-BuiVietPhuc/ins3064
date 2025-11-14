<?php
session_start();
// Tạo ID mới, giữ lại dữ liệu cũ
session_regenerate_id(true);
echo "Session ID đã được tái tạo để ngăn tấn công fixation.";
?>
