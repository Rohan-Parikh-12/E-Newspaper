<?php 
error_reporting(0);
session_start();
 ?>
<html>
<head>
	<title>INFORMATION</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">


<style>
.buttonfix
{
	position: fixed;
}

</style>
</head>
<body>

<div class="fix">
<?php  
include 'header.php';

?>
</div>
<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
<br><br><br>

<h1>Alt+P : Go to Feedback Section</h1>
<h1>Alt+1 : Home</h1>
<h1>Alt+2 : News</h1>
<?php

error_reporting(0);

	if(isset($_SESSION['name']))
	{
	$user=$_SESSION['name']; ?>

	<h1>Alt+3 : Live News</h1>


<?php
} else {
	?>
	<h1 style="opacity: 0.3">Alt+3 : For this shortcut you need to <b ><a href="login.php" style="color:red">login.</a></b></h1>
	<?php
}
	?>

<h1>Alt+4 : Contact Us</h1>
<h1>Alt+5 : About Us</h1>
<h1>Alt+6 : Share</h1>
<h1>Alt+7 : Turn the DarkMood on/off</h1>

<?php

error_reporting(0);

	if(isset($_SESSION['name']))
	{
	$user=$_SESSION['name']; ?>

	<h1>Alt+8 : Your Account Info. / change your details</h1>


<?php
} else {
		?>
	<h1 style="opacity: 0.3">Alt+8 : For this shortcut you need to <b><a href="login.php" style="color:red">login.</a></b></h1>
	<?php
}
	?>
	

	

<script>
function goBack() 
{
  window.history.back();
}
</script>

</body>
</html>