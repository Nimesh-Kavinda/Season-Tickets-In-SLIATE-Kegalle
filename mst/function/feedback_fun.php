<?php 
include "db.php";
session_start();
$user_id = htmlspecialchars(trim($_SESSION['user']), ENT_QUOTES, 'UTF-8');
$id = htmlspecialchars(trim($_SESSION['id']), ENT_QUOTES, 'UTF-8');

$fname= htmlspecialchars(trim($_POST['feed_name']), ENT_QUOTES, 'UTF-8');
$fmsg= htmlspecialchars(trim($_POST['feed_msg']), ENT_QUOTES, 'UTF-8');




$sql=mysqli_query($conn, "INSERT INTO feedback (index_number, name, message) VALUES ('$user_id', '$fname', '$fmsg')");

header("Location: ../home.php")
?>