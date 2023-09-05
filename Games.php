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
    <title>Games</title>
    <link rel="stylesheet" href="stylegames.css">
    <link rel="icon" href="images/Logo.png">
</head>

<body>
    <nav style="flex-wrap: nowrap; align-items: center; display: flex;">

        <a href="index.php"><img src="images/Logo.png" style="width: 100px; max-width: 100%; height: auto;  margin-right: 30px;  margin-left: 10px;  margin-top: 10px;"></a>
        <div class="left-div">
            <!-- <a href="Games.html"> <button class="grow_ellipse green">Games</button> </a> -->
            <a href="Movies.php"> <button class="grow_ellipse red"></button> </a>
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
        </div>


    </nav>


    <section class="product">
        <h2 class="product-category">FPS</h2>
        <button class="pre-btn">&lt;</button>
        <button class="nxt-btn">&gt;</button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (1).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>OVERWATCH</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (2).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Apex Legends</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (8).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Fortnite</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (4).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Destiny 2</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (5).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>BORDERLANDS 3</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (6).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>HALO INFINITE</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (7).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Call Of Duty Black OPS 3</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download (3).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Doom</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/images.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>CSGO</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/FPS/download.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Valorant</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================= -->
    <section class="product">
        <h2 class="product-category">MMORPG</h2>
        <button class="pre-btn">&lt;</button>
        <button class="nxt-btn">&gt;</button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (1).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>World Of Warcraft</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Amal AL sho3oob</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (3).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Dungeons & Dragons</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (4).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Rift</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (5).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>RuneScape</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (6).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Final Fantesy</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (7).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Metin 2</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (8).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Pirate 101</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (9).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Aion</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/MMORGB/download (2).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>EVE</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================= -->
    <section class="product">
        <h2 class="product-category">Survival</h2>
        <button class="pre-btn">&lt;</button>
        <button class="nxt-btn">&gt;</button>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>RUST</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (6).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>MUCK</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (10).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>ARK</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (2).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>SkyRim</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (3).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The Forest</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (4).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>7 Days To Die</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (5).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>SCUM</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (7).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>Fallout 4</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/images.jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>RAFT</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/Gamesimages/survival/download (1).jpeg" alt="">

                </div>
                <div class="product-info">
                    <h2>The Witcher</h2>
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