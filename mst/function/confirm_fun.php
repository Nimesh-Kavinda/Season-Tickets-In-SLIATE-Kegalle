<?php 
include "db.php";
session_start();
$user_id = htmlspecialchars(trim($_SESSION['user']), ENT_QUOTES, 'UTF-8');
$id = htmlspecialchars(trim($_SESSION['id']), ENT_QUOTES, 'UTF-8');



$payment= htmlspecialchars(trim($_POST['payment']), ENT_QUOTES, 'UTF-8');
$y_cost= htmlspecialchars(trim($_POST['y_cost']), ENT_QUOTES, 'UTF-8');
$balance= htmlspecialchars(trim($_POST['balance']), ENT_QUOTES, 'UTF-8');

$sql = mysqli_query($conn, "INSERT INTO payment (index_no, payment, cost, balance) VALUES ('$user_id', '$payment', '$y_cost' , '$balance')");

if ($sql === false) {
   
    echo $sql;
 } else {
   header("location: ../home.php");
 }




?>