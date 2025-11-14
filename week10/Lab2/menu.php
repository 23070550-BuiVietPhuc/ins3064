<?php
session_start();
require_once 'db_functions.php';

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id) {
    if (hasDbPermission($user_id, 'delete_user')) {
        echo '<a href="delete.php">Delete User</a><br>';
    }
    if (hasDbPermission($user_id, 'edit_user')) {
        echo '<a href="edit.php">Edit User</a><br>';
    }
    if (hasDbPermission($user_id, 'view_user')) {
        echo '<a href="view.php">View User</a><br>';
    }
} else {
    echo "Bạn chưa login!";
}
?>
