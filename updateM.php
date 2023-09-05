<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: Login.php");
}
?>

<?php
include('./database.php');

$id = $_GET['updateid'];




if (isset($_POST['update'])) {

    $type = $_POST['type'];


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
        $sql = "UPDATE `addtowishlist` SET name='$Name', rank='$Rank', image='$upload_image' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:Wishlist.php');
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

            <form action="updateM.php?updateid=<?= $id ?>" method="post" enctype="multipart/form-data">

                <input type="hidden" name="type" value="movie">

                <div class="input-box">
                    <input type="text" n7ame="MName">
                    <label>Movie Name</label>

                </div>

                <div class="input-box">
                    <input type="text" name="MRank">
                    <label>Movie Rank out of 5</label>

                </div>

                <div class="input-box">
                    <input type="file" name="Mfile">
                    <label>File</label>

                </div>

                <button type="submit" class="btn" name="update">Update</button>

            </form>

        </div>
    </div>

</body>

</html>