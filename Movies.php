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
    <title>Movies</title>
    <link rel="stylesheet" href="stylemovies.css">
    <link rel="icon" href="images/Logo.png">
</head>

<body>
    <nav style="flex-wrap: nowrap; align-items: center; display: flex;">

        <a href="index.php"><img src="images/Logo.png" style="width: 100px; max-width: 100%; height: auto;  margin-right: 30px;  margin-left: 10px;  margin-top: 10px;"></a>
        <div class="left-div">
            <a href="Games.php"> <button class="grow_ellipse green"></button> </a>
            <!-- <a href="Movies.html"> <button class="grow_ellipse red">Movies</button> </a> -->
        </div>

        <div class="right-div">
            <!-- <a href="Wishlist.html"> <button class="grow_ellipse anybutton">wishlist</button> </a>

            <a href="Login.html"> <button class="grow_ellipse anybutton">Login/signup</button> </a> -->
        </div>
        <div id="sidebar">
            <div class="toggle-btn" onclick="show()">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Wishlist.php">Wishlist</a></li>
                <?php

                if (!isset($_SESSION["user"])) {


                    echo "<li><a href='Login.php'>Login</a></li>";
                    echo "<li><a href='Signup.php'>Sign-up</a></li>";
                } else {
                    echo "<li><a href='Logout.php'>Logout</a></li>";
                }
                ?>



            </ul>
        </div>



    </nav>


    <section class="product">
        <h2 class="product-category">Action</h2>
        <button class="pre-btn">&lt;</button>
        <button class="nxt-btn">&gt;</button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (1).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Kandahar</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (2).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Fast X</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (3).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Knights of the Zodiac</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (4).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Guardians of the Galaxy Vol. 3</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (5).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Bullet Train</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (6).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Uncharted</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (7).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Blacklight</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download (8).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Jungle Cruise</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/download.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The Flash</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/Action/images.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The River Wild</h2>
                </div>
            </div>
        </div>
    </section>


    <!-- ================================================= -->
    <section class="product">
        <h2 class="product-category">Adventure</h2>
        <button class="pre-btn">&lt;</button>
        <button class="nxt-btn">&gt;</button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (1).jpeg " alt="">

                </div>
                <div class="product-info">
                    <h2>Fantastic Beasts:The Secrets of Dumbledor</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (2).jpeg " alt="">

                </div>
                <div class="product-info">
                    <h2>DUNE</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (3).jpeg " alt="">

                </div>
                <div class="product-info">
                    <h2>Godzilla vs. Kong</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (4).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>DOLITTLE</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (5).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Maleficent</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (6).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Aladdin</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (7).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>MEG 2</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (8).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Ready Player One</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download (9).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Shazam! Fury of the Gods</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/aventure/download.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Ant-Man and The Wasp: Quantumania</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================= -->
    <section class="product">
        <h2 class="product-category">Animation</h2>
        <button class="pre-btn">&lt;</button>
        <button class="nxt-btn">&gt;</button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (1).jpeg " alt="">

                </div>
                <div class="product-info">
                    <h2>Encanto</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (10).jpeg " alt="">

                </div>
                <div class="product-info">
                    <h2>The Super Mario Bros Movie</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (2).jpeg " alt="">

                </div>
                <div class="product-info">
                    <h2>The Croods</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (3).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The Angry Birds Movie</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (4).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The Lion King</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (5).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>coco</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (6).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Cars 3</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (7).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Ratatouille</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download (8).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The Incredibles</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/MoviesImages/animation/download.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Spider-Man Into the spider verse</h2>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-white fixed-bottom" style="background-color: black; width: 100%; height: 50px; color: white;text-align: center;position: relative; padding-top: 20px;">
        © 2023 Copyright:<a class="text-white" href="#" style="color: rgb(151, 151, 151);">Omar-Abushmais</a>
    </footer>
    <script src="script.js"></script>

    <script>
        function show() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>

</body>

</html>