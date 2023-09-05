<?php
$hostname = "localhost";
$dbUser = "u836776272_OmarShamis";
$dbPassword = "OmarShamis123@";
$dbname = "u836776272_FinalWeb";

$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbname);

if (!$conn) {
    die("Somthing went wrong;");
}
