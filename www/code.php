<html>
<head>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
    <title>User Sign-in</title>
</head>
<body>
    <?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="user";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
    if(isset($_POST['name'])==true)
    {
    $name = $_POST['name']; 
	$city = $_POST['city'];	
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

     $sql="INSERT INTO `user` . `user` (`name`,`city`, `phone`, `email`, `password`) VALUES ('$name','$city', '$phone', '$email', '$password');";


      if($con->query($sql)==true)
     {
          $insert=true;
      //  echo "sucefully connect";

	  header("Location:login.php"); 
	  
     }
    else
    {
		echo "<br>";
		echo "<br>";
      //  echo " $sql <br> $con->error";
		?>
		<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none;"> Back</button></div>
		<?php
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	  echo "<h1><center> Your phone number or email already been taken ! Please <a href='login.php'>login</a> or try with using another phone number or email </center></h1>";
		echo "<br>";
	  
	  echo "<center><img src='error.png' style='opacity: 1; border:none;'></center>";
		
    }
 }

    ?>
	
<script>
function goBack() 
{
  window.history.back();
}
</script>
<!-- <center><b><h3>Connection Successfully</h3> 
   
    <br><button type="submit" ><a href="index.html"> ENTER</a></button></h3></b></center> -->
</body>
</html>