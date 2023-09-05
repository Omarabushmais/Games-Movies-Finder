<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: Login.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Finding movies and games and adding it to wishlist">
    <meta name="keywords" content="Games, Movies">
    <meta name="author" content="Omar abushmais">
    <title>Adding</title>
    <link rel="stylesheet" href="styleadd.css">
    <link rel="icon" href="images/Logo.png">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h1>Add to wishlist</h1>

            <form action="Wishlist.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="type" value="game">

                <div class="input-box">

                    <input type="text" name="GName">
                    <label>Game Name</label>
                </div>

                <div class="input-box">

                    <input type="text" name="GRank">
                    <label>Game Rank</label>
                </div>

                <div class="input-box">

                    <input type="file" name="Gfile">
                    <label>File</label>
                </div>

                <button type="submit" class="btn" name="submit">Submit</button>

            </form>

        </div>
    </div>
</body>

</html>