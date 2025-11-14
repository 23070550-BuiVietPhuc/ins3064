<!-- 3. Delete "username" Cookie
Write a PHP script to delete a cookie named "username". -->
<?php 
$username = "Gulnara Serik";
setcookie("username", $username, time() + 3600); 
?>	

<?php 
setcookie("username", $username, time() - 3600); 
echo 'Remove cookie successfully<br/>';
?>
