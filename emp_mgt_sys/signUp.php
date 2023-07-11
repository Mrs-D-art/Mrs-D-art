<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO signup (fullname, username, email, password) VALUES ('$fullname', '$username', '$email', '$password')";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        die( mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="sign-wrapper">
        <h1>sign up</h1>
        <form action="signUp.php" method="post">
            <input type="text" placeholder="full name" name="fullname">
            <input type="email" placeholder="example@gmail.com" name="email">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            
            <button type="submit" name="signUp"><a href="login.php">sign up</a></button>
        </form>
        <div class="terms">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Administrator?</label>
        </div>
        <div class="member">
            Already a member? <a href="login.php">sign in</a> 
        </div>
    </div>

    <script src="css/js/main.js"></script>  
</body>
</html>
