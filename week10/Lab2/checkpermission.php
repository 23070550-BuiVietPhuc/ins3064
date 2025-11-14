<?php
require_once 'functions.php';

function requirePermission($permission) {
    if (!checkAccess($permission)) {
        header("Location: unauthorized.php");
        exit();
    }
}
?>
