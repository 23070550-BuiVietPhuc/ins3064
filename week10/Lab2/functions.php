<?php
require_once 'roles.php';
require_once 'users.php';

// Exercise 2: Kiểm tra quyền từ mảng
function hasPermission($user_id, $permission) {
    global $users, $roles;
    $user_role = $users[$user_id]['role'];
    return in_array($permission, $roles[$user_role]);
}

// Exercise 3: Kiểm tra quyền từ session
function checkAccess($required_permission) {
    global $roles;
    $user_role = $_SESSION['user_role'] ?? 'guest';
    return in_array($required_permission, $roles[$user_role]);
}
?>
