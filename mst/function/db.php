<?php
$servername = "localhost";
$database = "season_ticket";
$username = "root";
$password = "";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

 if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
 }
?>