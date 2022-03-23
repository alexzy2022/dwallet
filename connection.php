<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "crypto";

$conn = mysqli_connect($server, $username, $password, $db);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
?>
