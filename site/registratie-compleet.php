<?php
$email       = $_POST['email'];
$password     = $_POST['password'];
$firstname         = $_POST['firstname'];
$lastname      = $_POST['lastname'];
$address         = $_POST['address'];
$city          = $_POST['city'];
$is_active           = $_POST['is_active'];
$role      = $_POST['role'];

require 'database.php';

$sql = "INSERT INTO user (email, password, firstname, lastname, address, city, is_active, role) 
VALUES ('$email', '$password', '$firstname', '$lastname', '$address', '$city', '$is_active', '$role')";

if (mysqli_query($conn, $sql)) {
    // echo "succesvol product toegevoegd "; 
    header("location: tools-overzicht.php");
}