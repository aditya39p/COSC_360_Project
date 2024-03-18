<?php
	session_start();
	if(!isset($_SESSION['username'])){
	   header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Insight Globe</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <header>
            <a href="index.html"><img id="logo" src="Images/Logo.svg" alt="Logo of the website"></a>
            <nav>
                <ul class="navigation_links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Create</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </nav>
            <form action="">
                <div class="search">
                    <span class="search-icon material-symbols-outlined">search</span>
                    <input class="search-bar" type="search" placeholder="Search">
                </div>
            </form>
        </header>
        <div class="banner">
            <div class="slogan">
                <h1>Your Slogan Goes Here</h1>
                <p>A brief description or additional information</p>
            </div>
        </div>
    </body>
</html>