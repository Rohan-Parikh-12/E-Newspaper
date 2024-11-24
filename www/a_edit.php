<?php
error_reporting(0);
session_start();

 $_SESSION['update'];

 if(isset($_SESSION['update'])==true)
 {
    $user6=$_SESSION['update'];
	error_reporting(0);
    $server ="localhost";
	$username ="root";
	$password ="";
	$database="live";
	$con =mysqli_connect($server,$username,$password,"live") or die("connected failed".mysqli_connect_error);
	$sql2="SELECT * FROM `live` WHERE id='{$user6}';";
	$result = mysqli_query($con,$sql2) or die("error");
	if(mysqli_num_rows($result)>0 )
	{	
   
		while($row=mysqli_fetch_assoc($result))
		{
			session_start();
			error_reporting(0);
			$_SESSION['news']=$row['news'];
		}
		if(isset($_POST['submit'])==true)
		{
			$news=$_POST['info'];
			$sql="UPDATE `live` SET `news`='$news' WHERE id='{$user6}';";
			$result = mysqli_query($con,$sql) or die("error");
			header("Location: A_sucessfully.php");
		}
	} 
	
	
}else
{
	echo "error1";
}	

      
?>

<html>
<head>
    <title>Edit </title>
<link rel="stylesheet" href="style.css"> 

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
<body>

<?php include 'a_header.php';?>

  <div class="form-box">
  <div class="container">
<center><h2>Account Info</h2>


        <form action="a_edit.php" method="POST">
 
        <br><input type = "text" name = "info" id = "info" value="<?php 
			session_start();
			error_reporting(0);
		echo $_SESSION['news'] ; ?>">
		
       

        <br><br>
		<br><button class="button button2" name = "submit" id = "submit">SUBMIT</button> <br><br>
        </form>
   
</center>
</div>
</div>
</body>
</html>