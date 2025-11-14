<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<html lang='en'>
<head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="homecss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div class="container">

    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>  

</div>

 <header>
    <div class="logo">Recipe Sharing Web (logo)</div>
</header>

  <div class="profile-header">
    <div class="avatar">avatar</div>
    <div class="username">họ tên</div>
  </div>

<div class="container">
    <div class="recipe-card">
    <img src="salmon.jpg" class="recipe-img" alt="Roasted Salmon">
    <div class="recipe-info">
        <h3>Roasted Salmon Glazed With Brown Sugar and Mustard</h3>
        <p>Salmon fillets, preferably wild or farmed organically. Dijon mustard, coarse country style. Brown sugar, salt and black pepper.</p>
        <small>30min - by Anonymous</small>
    </div>
    </div>

    <div class="recipe-card">
    <img src="salmon.jpg" class="recipe-img" alt="Roasted Salmon">
    <div class="recipe-info">
        <h3>Roasted Salmon Glazed With Brown Sugar and Mustard</h3>
        <p>Salmon fillets, preferably wild or farmed organically. Dijon mustard, coarse country style. Brown sugar, salt and black pepper.</p>
        <small>30min - by Dũng</small>
    </div>
    </div>

    <div class="recipe-card">
    <img src="salmon.jpg" class="recipe-img" alt="Roasted Salmon">
    <div class="recipe-info">
        <h3>Roasted Salmon Glazed With Brown Sugar and Mustard</h3>
        <p>Salmon fillets, preferably wild or farmed organically. Dijon mustard, coarse country style. Brown sugar, salt and black pepper.</p>
        <small>30min - by Thảo</small>
    </div>
    </div>

    <div class="recipe-card">
    <img src="salmon.jpg" class="recipe-img" alt="Roasted Salmon">
    <div class="recipe-info">
        <h3>Roasted Salmon Glazed With Brown Sugar and Mustard</h3>
        <p>Salmon fillets, preferably wild or farmed organically. Dijon mustard, coarse country style. Brown sugar, salt and black pepper.</p>
        <small>30min - by Huy</small>
    </div>
    </div>
</div>

</body>
</html>