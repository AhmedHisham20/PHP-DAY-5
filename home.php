<?php 
session_start();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

include ('header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
</head>
<style>
    p{text-align: center;}
    a{
        width: 150px;
        height: 100px;
        color: white;
        text-decoration: none;
        border: 1px solid black;
        background-color: darkred;
    }
    .i {background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    width: 98vw;
    height: 78vh;
}

</style>
<body>
     <h1 style="text-align: center;"><?php  if(isset($_SESSION['user_name'])){echo "Hello," . $_SESSION['user_name'].".Welcome to our site.";}else{ echo 'Session not set';}?></h1>
     <a href="./road map page.html">
        <img class="i" src="./indexPage.jpg" alt="home page photo"  >
        </a>
        <p><a href="Logout.php">Logout</a></p>
        <hr>
        <p style="text-align: center;"> copy right 2021 noha salah&copy; all rights reserved</p>

     
</body>
</html>

