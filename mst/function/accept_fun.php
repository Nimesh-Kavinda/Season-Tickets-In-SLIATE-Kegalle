<?php 
include "db.php";

$id = htmlspecialchars(trim($_GET['id']), ENT_QUOTES, 'UTF-8');
$action = htmlspecialchars(trim($_GET['action']), ENT_QUOTES, 'UTF-8');


$sql=mysqli_query($conn, "UPDATE registration SET status='$action' WHERE id=$id");
 
header("Location: ../tabel.php")


?>