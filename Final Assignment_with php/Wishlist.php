<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!-- =====================================for add============================================ -->
<?php
include('./database.php');


if (isset($_POST['submit'])) {
    $type = $_POST['type'];


    if ($type === 'movie') {


        $Name = $_POST['MName'];
        $Rank = $_POST['MRank'];
        $image = $_FILES['Mfile'];
        // Process and store movie data into the "movies" table
        $imagefilename = $image['name'];
        // print_r($imagefilename);
        // echo "<br>";
        $imagefileerro = $image['error'];
        // print_r($imagefileerro);
        // echo "<br>";
        $imagefiletemp = $image['tmp_name'];
        // print_r($imagefiletemp);
        // echo "<br>";
        $filenamesepreate = explode('.', $imagefilename);
        // print_r($filenamesepreate);
        // echo "<br>";
        // $file_extention = strtolower($filenamesepreate[1]);
        //  print_r($file_extention);
        $file_extension = strtolower(end($filenamesepreate));
        // print_r($file_extension);
        // echo "<br>";
        $extensions = array('jpeg', 'jpg', 'png');
        if (in_array($file_extension, $extensions)) {
            $upload_image = 'wishlistimages/' . $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
            $sql = "insert into `addtowishlist` (name,rank,image) values ('$Name','$Rank','$upload_image')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo "data inserted";
            } else {
                die(mysqli_error($conn));
            }
        }
    } elseif ($type === 'game') {


        $Name = $_POST['GName'];
        $Rank = $_POST['GRank'];
        $image = $_FILES['Gfile'];
        // Process and store game data into the "games" table

        $imagefilename = $image['name'];
        // print_r($imagefilename);
        // echo "<br>";
        $imagefileerro = $image['error'];
        // print_r($imagefileerro);
        // echo "<br>";
        $imagefiletemp = $image['tmp_name'];
        // print_r($imagefiletemp);
        // echo "<br>";
        $filenamesepreate = explode('.', $imagefilename);
        // print_r($filenamesepreate);
        // echo "<br>";
        // $file_extention = strtolower($filenamesepreate[1]);
        //  print_r($file_extention);
        $file_extension = strtolower(end($filenamesepreate));
        // print_r($file_extension);
        // echo "<br>";
        $extensions = array('jpeg', 'jpg', 'png');
        if (in_array($file_extension, $extensions)) {
            $upload_image = 'wishlistimages/' . $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
            $sql = "insert into `addtowishlistforgames` (name,rank,image) values ('$Name','$Rank','$upload_image')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo "data inserted";
            } else {
                die(mysqli_error($conn));
            }
        }
    }
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
    <title>Wishlist</title>
    <link rel="stylesheet" href="stylewishlist.css">
    <link rel="icon" href="images/Logo.png">
</head>

<body>
    <nav style="flex-wrap: nowrap; align-items: center; display: flex;">

        <a href="index.php"><img src="images/Logo.png" style="width: 100px; max-width: 100%; height: auto;  margin-right: 30px;  margin-left: 10px;  margin-top: 10px;"></a>
        <div class="left-div">
            <a href="Games.php"> <button class="grow_ellipse green"></button> </a>
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


    <h1>My Wishlist</h1>
    <!-- <section> -->


    <div class="tab">
        <button class="tablinks reder" onclick="openCity(event, 'Movies')">Movies</button>
        <button class="tablinks greener" onclick="openCity(event, 'Games')">Games</button>


    </div>

    <div id="Movies" class="tabcontent ">
        <!-- <div id="Movies" class="container">
            <div class="image">
                <img src="images/MoviesImages/aventure/download (8).jpeg" alt="">
                <button class="card-btn">Remove</button>
            </div>
            <div class="image">
                <img src="images/MoviesImages/aventure/download (8).jpeg" alt="">
                <button class="card-btn">Remove</button>
            </div>

        </div> -->


        <!-- need to make table -->

        <div class="middle">
            <a href="addingM.php"><button class="grow_ellipse anybutton ">Add</button></a>
        </div>


        <br>

        <?php
        $sql = "SELECT * FROM `addtowishlist`";
        $result = mysqli_query($conn, $sql);
        ?>

        <table>
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Poster</th>
                    <th>Rank&#47;5</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $rank = $row['rank'];
                    $image = $row['image'];



                    echo '   <tr>

                        <td> ' . $name . ' </td>
                        <td>
                            <div class="image">
                                 <img src="' . $image . '" style="width: 100%; height: 100%;" />; 
                            </div>
                        </td>
                        <td>' . $rank . '</td>
                        <td>
                            <div >
                                <button class="grow_ellipse anybutton "><a href="updateM.php?updateid= ' . $id . '" class="upload">Update</a></button>
                            </div>
                            <div >
                                <button class="grow_ellipse anybutton "><a href="deleteM.php?deleteid=' . $id . '" class="delete">Delete</a></button>
                            </div>
                        </td>
                    </tr>
                 ';
                } ?>
            </tbody>
        </table>

    </div>

    <div id="Games" class="tabcontent " style="display: none;">

        <div class="middle">
            <a href="addingG.php"><button class="grow_ellipse anybutton ">Add</button></a>
        </div>

        <br>

        <!-- <div id="Games" class="container">
            <div class="image"><img src="images/MoviesImages/aventure/download (7).jpeg" alt=""></div>
        
        </div> -->

        <?php
        $sql = "SELECT * FROM `addtowishlistforgames`";
        $result = mysqli_query($conn, $sql);
        ?>

        <table>
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Poster</th>
                    <th>Rank&#47;5</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $rank = $row['rank'];
                    $image = $row['image'];

                    echo '  <tr>

                    <td>' . $name . '</td>
                    <td>
                        <div class="image">
                            <img src="' . $image . '" style="width: 100%; height: 100%;">; 
                        </div>
                    </td>
                    <td>' . $rank . '</td>
                    <td>
                        <div class="upload">
                            <button class="grow_ellipse anybutton "><a class="upload" href="updateG.php?updateid=' . $id . '" >Update</a></button>
                        </div>
                        <div class="delete">
                            <button class="grow_ellipse anybutton "><a class="delete" href="deleteG.php?deleteid=' . $id . '" >Delete</a></button>
                        </div>


                    </td>
                </tr>
          ';
                } ?>
            </tbody>
        </table>



    </div>



    <!-- </section> -->

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }



        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <script>
        function show() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>




</body>

</html>