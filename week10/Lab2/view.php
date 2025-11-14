<?php
session_start();
echo "Current role: " . ($_SESSION['user_role'] ?? 'guest');
