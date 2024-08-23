<?php
session_start();
header('Content-type: application/json');
include_once 'db.php';
$response = array();

if ($_POST) {

	$user = trim($_POST['username']);
	$pass = trim($_POST['password']);

	$uname = htmlspecialchars(strip_tags($user), ENT_QUOTES, 'UTF-8');
	$upass = htmlspecialchars(strip_tags($pass), ENT_QUOTES, 'UTF-8');


	$sql = mysqli_query($conn, "SELECT * FROM registration WHERE user_name='$uname' and status =1");
	$row = mysqli_fetch_assoc($sql);

	if (mysqli_num_rows($sql) == 1) {

		if ($row['password'] == $upass) {

		
			$_SESSION['user'] = $row['user_name'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['val'] = $row['status'];
			$_SESSION['pos'] = $row['position'];

            header("location: ../home.php");

		} else {
            header("location: ../index.php");

		}
	} else {
        
        header("location: ../index.php");

	}
}


