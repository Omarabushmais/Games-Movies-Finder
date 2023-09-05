<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Finding movies and games and adding it to wishlist">
    <meta name="keywords" content="Games, Movies">
    <meta name="author" content="Omar abushmais">
    <title>M/G Finder</title>
    <link rel="stylesheet" href="styleHome.css">

    <link rel="icon" href="images/Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">



</head>

<body class="gradback">
    <nav style="flex-wrap: nowrap; align-items: center; display: flex; z-index: 1;">

        <a href="index.php"><img src="images/Logo.png" style="width: 100px; max-width: 100%; height: auto;  margin-right: 30px;  margin-left: 10px;  margin-top: 10px;"></a>
        <!-- <div class="left-div">
            <a href="Games.html"> <button class="grow_ellipse green">Games</button> </a>
            <a href="Movies.html"> <button class="grow_ellipse red">Movies</button> </a>
        </div> -->


        <div class="right-div ">
            <!-- <a href="Wishlist.html"> <button class="grow_ellipse anybutton">wishlist</button> </a> -->
            <!-- <a href="Login.php"> <button class="grow_ellipse anybutton">Login/signup</button> </a> -->

        </div>


    </nav>

    <div class="split-screen">
        <!-- Left content -->
        <a href="Games.php" class="split-screen__half split-screen__half--green">
            <div class="title">Games</div>
            <div class="description">Finding games based on Genre</div>
        </a>
        <!-- Right content -->
        <a href="Movies.php" class="split-screen__half split-screen__half--red">
            <div class="title">Movies</div>
            <div class="description">Finding movies based on Genre</div>
        </a>
    </div>


    <footer class="text-center text-white fixed-bottom" style="background-color: black; width: 100%; height: 50px; color: white;text-align: center;position: relative; padding-top: 20px;">
        © 2023 Copyright:<a class="text-white" href="#" style="color: rgb(151, 151, 151);">Omar-Abushmais</a>
    </footer>


</body>

</html>