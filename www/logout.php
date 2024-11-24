<?php
session_start();
if(isset($_SESSION['name']))
{
    session_unset();
    session_destroy();
	unset($_COOKIE["emailcookie"]);
	unset($_COOKIE["passwordcookie"]);
	setcookie("emailcookie",$_SESSION['email'],time()-(86400 *30 *2),"/");
	setcookie("passwordcookie",$_SESSION['password'],time()-(86400 *30 *2),"/");
    header("Location:index.php");
}
else{
header("Location:index.php");
}
?>