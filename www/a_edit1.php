<?php
error_reporting(0);
session_start();

echo $_SESSION['update']=$_GET['id'];

header("Location: a_edit.php");

?>