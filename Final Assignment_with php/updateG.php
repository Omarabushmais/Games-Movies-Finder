<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<?php
include('./database.php');

$id = $_GET['updateid'];




if (isset($_POST['update'])) {

    $type = $_POST['type'];

    echo $id;

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

        $sql = "UPDATE `addtowishlistforgames` SET name='$Name',image='$upload_image', rank='$Rank' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location:wishlist.php");
        } else {
            die(mysqli_error($conn));
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
    <title>Updating</title>
    <link rel="stylesheet" href="styleadd.css">
    <link rel="icon" href="images/Logo.png">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h1>Update wishlist</h1>

            <form action="updateG.php?updateid=<?= $id ?>" method="post" enctype="multipart/form-data">

                <input type="hidden" name="type" value="game">

                <div class="input-box">
                    <input type="text" name="GName">
                    <label>Game Name</label>

                </div>

                <div class="input-box">
                    <input type="text" name="GRank">
                    <label>Game Rank out of 5</label>

                </div>

                <div class="input-box">
                    <input type="file" name="Gfile">
                    <label>File</label>

                </div>


                <button type="submit" class="btn" name="update">Update</button>





            </form>

        </div>

</body>

</html>