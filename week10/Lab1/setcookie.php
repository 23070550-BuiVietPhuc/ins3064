<!-- 1. Set "username" Cookie with Expiry
Write a PHP script to set a cookie named "username" 
with the value "Gulnara Serik" and an expiration time of one hour.
<?php 
$username = "Gulnara Serik";
setcookie("username", $username, time() + 3600); 
?>	

<!-- 2. Retrieve "username" Cookie
Write a PHP script to retrieve and display the value of the cookie named "username". -->
<?php
if (isset($_COOKIE['username'])) {
    echo "Username: " . $_COOKIE['username'];
} else {
    echo "Cookie 'username' is not set.";
}
