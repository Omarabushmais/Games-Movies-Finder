<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
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
    <title>Signup</title>
    <link rel="stylesheet" href="stylesignup.css">
    <link rel="icon" href="images/Logo.png">

</head>

<body>
    <div class="container">
        <div class="login-box">
            <?php
            if (isset($_POST["submit"])) {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmPassword = $_POST["confirmPassword"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);


                $errors = array();

                if (empty($fname) or empty($lname) or empty($username) or empty($email) or empty($password) or empty($confirmPassword)) {
                    array_push($errors, "ALL fields are required");
                }

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                }

                if (strlen($password) < 8) {
                    array_push($errors, "Password must be at least 8 characters long");
                }
                if ($password !== $confirmPassword) {
                    array_push($error, "Password does not match");
                }
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    array_push($errors, "Email already exists! ");
                }

                if (count($errors) > 0) {
                    echo "<div style = 'color:red; text-align:center;'>";
                    foreach ($errors as $error) {
                        echo "$error<br>";
                    }
                    echo "</div>";
                } else {

                    $sql = "INSERT INTO users (fname, lname, username, email, password) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $username, $email, $passwordHash);
                        mysqli_stmt_execute($stmt);

                        echo "<div style = 'color:red; text-align:center;'>You are Registered Successfully</div>";
                        header("Location: index.php");
                        die();
                    } else {
                        die("Somthing went wrong ");
                    }
                }
            }

            ?>


            <h2>Sign-up</h2>
            <form id="signup-form" action="Signup.php" method="post">
                <div class="input-box">
                    <input type="text" name="fname">
                    <label>First Name</label>
                </div>
                <div class="input-box">
                    <input type="text" name="lname">
                    <label>Last Name</label>
                </div>
                <div class="input-box">
                    <input type="text" name="username">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <label>Repeat Password</label>
                </div>

                <div class="signup-link">
                    <a href="Login.php">Login</a>
                </div>

                <button type="submit" name="submit" class="btn">Sign-up</button>


            </form>
            <!-- </div>
        <span style="--i:0;"></span>
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <span style="--i:6;"></span>
        <span style="--i:7;"></span>
        <span style="--i:8;"></span>
        <span style="--i:9;"></span>
        <span style="--i:10;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:13;"></span>
        <span style="--i:14;"></span>
        <span style="--i:15;"></span>
        <span style="--i:16;"></span>
        <span style="--i:17;"></span>
        <span style="--i:18;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:21;"></span>
        <span style="--i:22;"></span>
        <span style="--i:23;"></span>
        <span style="--i:24;"></span>
        <span style="--i:25;"></span>
        <span style="--i:26;"></span>
        <span style="--i:27;"></span>
        <span style="--i:28;"></span>
        <span style="--i:29;"></span>
        <span style="--i:30;"></span>
        <span style="--i:31;"></span>
        <span style="--i:32;"></span>
        <span style="--i:33;"></span>
        <span style="--i:34;"></span>
        <span style="--i:35;"></span>
        <span style="--i:36;"></span>
        <span style="--i:37;"></span>
        <span style="--i:38;"></span>
        <span style="--i:39;"></span>
        <span style="--i:40;"></span>
        <span style="--i:41;"></span>
        <span style="--i:42;"></span>
        <span style="--i:43;"></span>
        <span style="--i:44;"></span>
        <span style="--i:45;"></span>
        <span style="--i:46;"></span>
        <span style="--i:47;"></span>
        <span style="--i:48;"></span>
        <span style="--i:49;"></span>


    </div> -->

</body>

</html>