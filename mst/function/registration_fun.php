<?php 
include "db.php";

$fullname= htmlspecialchars(trim($_POST['full_name']), ENT_QUOTES, 'UTF-8');
$address= htmlspecialchars(trim($_POST['address']), ENT_QUOTES, 'UTF-8');
$username= htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8');
$email= htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
$phone= htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
$password= htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8');
$position= htmlspecialchars(trim($_POST['position']), ENT_QUOTES, 'UTF-8');
$droot= htmlspecialchars(trim($_POST['droot']), ENT_QUOTES, 'UTF-8');
$cordinator= htmlspecialchars(trim($_POST['cordinator']), ENT_QUOTES, 'UTF-8');

if($position == 'on'){
    $posi = 1;
} else {
    $posi = 0;
}



$sql=mysqli_query($conn, "INSERT INTO registration (full_name, address, user_name, email, phone_number, password, position, droot, cordinator ) VALUES ('$fullname', '$address', '$username' , '$email', $phone , '$password', '$position', '$droot', '$cordinator')");

header("Location: ../regmsg.php");
exit();

?>