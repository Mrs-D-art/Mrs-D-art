<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <h1>Home</h1>
    
    <button type="button" class="btn btn-outline-primary"><a href="signUp.php">sign up</a></button>
<button type="button" class="btn btn-outline-secondary"><a href="login.php">login</a></button>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    