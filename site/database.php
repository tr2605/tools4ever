<?php
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "tools4ever";
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// Controleer de verbinding
if(mysqli_connect_error())
{
 echo "Connection establishing failed!";
}
else
{
 echo "Connection established successfully.";
}