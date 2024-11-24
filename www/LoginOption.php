<html>
<head>

<title>Login Form</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">

<style>
body
{
	margin: 0;
	background-image: url(istockphoto-1068438600-640x640.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	cursor: cell;
} 
.dark-mode 
{
  
  background-image: url(dark1.jpg);
  color: black;
}
	</style>

</head>
<style>


<!-- for pointer/cursor 
body {cursor: cell;}
-->

* 
{
  box-sizing: border-box;
}


.column 
{
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 200px;
}

<!-- Clearfix (clear floats) -->
.row::after 
{
  content: "";
  clear: both;
  display: table;
}


.center
{
	text-align: center; 
}




</style>

</head>

<body>

<?php include 'header.php';?>

<center>
<div class="form-box">
	<h2>Login Here</h2>
	<form>
    <div id="color">
    <h1><a href="login.php">USER</a></h1>
    <h1><a href="d_login.php">DEVELOPER</a></h1>
	<h1><a href="Adminlogin.php">ADMIN</a></h1>
</div>
</form>

</div>
</center>
</body>
</html>