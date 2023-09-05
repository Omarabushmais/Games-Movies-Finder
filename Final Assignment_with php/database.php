<?php
$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbname = "login_signup";

$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbname);

if (!$conn) {
    die("Somthing went wrong;");
}
