<?php
session_start();
require_once 'checkpermission.php';

requirePermission('edit_user');

echo "Trang Edit User - bạn có quyền!";
?>
