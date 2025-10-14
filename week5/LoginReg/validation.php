<?php
session_start();

/* connect to database check user*/
$con=mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'LoginReg');

/* create variables to store data */
$name =$_POST['user'];
$pass =$_POST['password'];

// KHÔNG CẦN lấy $_POST['email'] và $_POST['nationality'] nữa 
// vì form đăng nhập không gửi chúng.

/* select data from DB */
// CHỈ CẦN CHECK name và password. Sẽ lấy ra HẾT các cột (name, password, email, nationality,...)
$s="select * from userReg where name='$name' AND password='$pass'"; 

/* result variable to store data */
$result = mysqli_query($con,$s);

/* check for duplicate names and count records */
$num =mysqli_num_rows($result);
if($num==1){
    
    // THAY ĐỔI LỚN NHẤT: Lấy TẤT CẢ dữ liệu người dùng từ kết quả truy vấn
    $user_data = mysqli_fetch_array($result); 
    
    /* Storing the username and session */
    $_SESSION['username'] =$user_data['name'];
    // LẤY email và nationality từ MẢNG DỮ LIỆU ĐÃ TRUY VẤN
    $_SESSION['email'] = $user_data['email']; 
    $_SESSION['nationality'] = $user_data['nationality']; 
    
    header('location:home.php');
}else{
    header('location:login.php');
}
?>