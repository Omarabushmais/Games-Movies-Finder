<?php
include 'database.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from addtowishlistforgames where id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:Wishlist.php');
    } else {
        die(mysqli_error($conn));
    }
}
