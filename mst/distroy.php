<?php
session_start();
unset($_SESSION['login_user']);
unset($_SESSION['uname']);
session_destroy();

$redirectUrl = "index.php";
echo "<script type=\"text/javascript\">";
echo "window.location.href = '$redirectUrl'";
echo "</script>";
		
?>