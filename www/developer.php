<html>
<head>


<title>Login Form</title>
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

<?php include 'header.php';?>
<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>

<div class="form-box">
	<h2>SIGN UP</h2>
	
	<form action="developer.php" method="POST">
		<div class="input-group">
			<label>UserName:</label>
			<input type="text" name = "name" id = "name" placeholder = "Enter your name" required>
		</div>
		<div class="input-group">
			<label>Phone:</label>
			<input type="text" name = "phone" id = "phone" placeholder = "Enter your phone number" required>
		</div>
		<div class="input-group">
			<label>E-mail:</label>
			<input type="text" name = "email" id = "email" placeholder = "Enter your email" required>
		</div>
		<div class="input-group">
			<label>Password:</label>
			<input type="password" name = "password" id = "password" placeholder = "Enter your password" pattern=".{8,}"   required title="8 characters minimum" required>
		</div>
			
		<button type="submit">Submit &#10132; </button><br>
	</form>
		<center><h3><br>If you already have an account<br><p id="p1"><a href="d_login.php">Login Here</a></p></h3></center>
	
</div>
</body>
</html>
<html>
<head>
  
    <title>Developer Sign-in</title>
</head>
<body>

    <?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="developer";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
    if(isset($_POST['name'])==true)
 {
    $name = $_POST['name'];    
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $approve = 0;

    $sql="INSERT INTO  `developer` (`name`, `phone`, `email`, `password`,`approve`) VALUES ('$name', '$phone', '$email', '$password','$approve');";

 
      if($con->query($sql)==true)
     {
				session_start();
                $_SESSION['dname']=$name;
				//header("Location:s_con.php");
				echo "<script>window.location.href='s_con.php';</script>";
     }
    else
    {
        echo "error: $sql <br> $con->error";
    }
	
 }

    ?>
<!-- <center><b><h3>Connection Successfully</h3> -->
   
<script>
function goBack() 
{
  window.history.back();
}
</script>


  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <link href="https://rawgit.com/shaneapen/Image-Preview-for-Links/master/image_preview_for_links.css" rel="stylesheet"> 
  <!-- MiniPreview stuff here -->
  <link href="./jquery.minipreview.css" rel="stylesheet">
  <script src="./jquery.minipreview.js"></script>
  <script type="text/javascript">
    $(function() {
                $('#p1 a').miniPreview({ prefetch: 'pageload' });
                $('#p2 a').miniPreview({ prefetch: 'parenthover' });
                $('#p3 a').miniPreview({ prefetch: 'none' });
            });
  </script> <script src="https://rawgit.com/shaneapen/Image-Preview-for-Links/master/image_preview_for_links.js"></script>
     
   
</body>
</html>