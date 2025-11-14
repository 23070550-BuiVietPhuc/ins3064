<?php
session_start();
require_once 'checkpermission.php';

requirePermission('delete_user');

echo "Trang Delete User - bạn có quyền!";
?>
