<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php';?>
</body>
<h1>
<center>
<br><br><br>
<?php
session_start();
if(isset($_SESSION['dname']))
{
    echo $_SESSION['dname']." , your data sent sucessfully to admin.<br>";
    echo "Please wait for authentication.<br>";
    echo "You can login after authentication ! <br><br>";
	
	echo "Go to login form and wait for approvle" ;
    echo " <form action='d_login.php' method='post'>
    <button>Login</button>
    </form> ";
}
else
{
echo "error";
}
?>

</center>
</h1>

</html>