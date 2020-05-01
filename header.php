<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav class="nav-header-main">
    <a class="header-logo" href="index.php">
    <img src="img/weightskull.jpg" alt="logo" height='50px'>
    </a>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    </ul>
   
    <div class="header-login">

    <?php
        if(isset($_SESSION['userId'])) {
            echo '<form class="logout" action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
        </form>';

          }else{
            echo ' <form class="form-login" action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" id="" placeholder="Username/E-mail....">
            <input type="password" name="pwd" id="" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <a class="signup" href="signup.php">Signup</a>';

          }



    ?>

   
    
    

    </div>
    </nav>


</header>








    
