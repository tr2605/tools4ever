<?php
if(is_numeric($_POST['prijsProduct'])){
  echo'number found';
}
$naam      = $_POST['naamProduct'];
$merk      = $_POST['merkProduct'];
$categorie = $_POST['categorieProduct'];
$prijs     = $_POST['prijsProduct'];

require 'database.php' ;

$sql = "INSERT INTO tools (tool_name, tool_category, tool_brand, tool_price) 
VALUES ('$naam', '$categorie', '$merk', '$prijs')";

if(mysqli_query($conn, $sql)){
  // echo "succesvol product toegevoegd "; 
   header("location: tools-overzicht.php");
}








