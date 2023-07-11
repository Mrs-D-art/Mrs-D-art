<?php
$con = mysqli_connect('localhost', 'root', '', 'employee_management');

if (!$con) {
    die(mysqli_error($con));
} 
?>