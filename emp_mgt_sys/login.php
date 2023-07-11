<?php
session_start();
include ('connect.php');
$name=$_GET['fullname'];
echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--stylesheet css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="sign-wrapper">
        <h1>sign in</h1>
        <form action="login.php" method="GET">
            <input type="text" placeholder="Full name" name="fullname">
            <input type="password" placeholder="password" name="password">
            <div class="recover">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
        <div class="terms">
            <input type="checkbox" id = "checkbox">
            <label for="checkbox">Administrator?</label>
        </div>
        <button type="submit" name="signin">Sign In</button>
        <div class="member">
            Not a member? <a href="sign.html">Register here</a>
        </div>
    </div>




    <script src="css/js/main.js"></script>  
</body>
</html>