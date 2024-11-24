<html>
<head>
	<title>PDF</title>
	<link rel="stylesheet" href="style.css">
	
<style>

input
{
	width: 50%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
} 
	
</style>
	
</head>
<body>

<?php include 'd_header.php';?>
<center>
<h1>PDF</h1>
<form action="new.php" method="post" enctype="multipart/form-data">


<lable> PDF </lable>

<br><br>


<input type="file" name="file" id="file">
<br><br>

<input type="date" name="date" id="date">
<br><br>


<input type="submit" name="submit" value="Submit">


</form>

</center>
</body>
</html>