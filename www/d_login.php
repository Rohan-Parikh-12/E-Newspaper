<?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$con =mysqli_connect($server,$username,$password,"developer");
if(!$con)
{
    die ("connected failed".mysqli_connect_error);
}
else
{
   // echo "connected";
}
?>
<?php
$name1=$_POST['name1'];
$pa2=$_POST['pa2'];
//echo $name1;
 //echo $pa2;
 $find="SELECT * FROM developer WHERE name='{$name1}'";
 
//  $result=mysqli_query($con,$find)or die("error");
?>

<html>
<head>


    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
    <title>Login</title>
	
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
.buttonfix
{
	position: fixed;
}
	</style>
	
</head>
<body>
<?php  include 'header.php';?>
<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
<center>
  <div class="form-box">
  <h2>Login Here</h2>
  <br>
  <div class="container">
      <h1>
     
      </h1>
      <form action="d_login.php" method="POST">
        <input type="text" name="name1" id="name1" placeholder="Enter your email  " required>
		<br>
       <br> <input type="password" name="pa2" id="pa2" placeholder="Enter password"required>
	   <br><br>
        <br><button class="su">submit</button>
        <?php
        if(isset($_POST['name1']))
        {
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="developer";
$con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
        $id= mysqli_real_escape_string($con,$_POST['name1']);
        $pa2=$_POST['pa2'];
         $sql ="SELECT `id`, `name`, `phone`, `email`, `password` FROM `developer` WHERE email='{$id}'AND password = '{$pa2}' AND approve=1";
        $result = mysqli_query($con,$sql) or die("error");
        if(mysqli_num_rows($result)>0 )
        {
           
            while($row=mysqli_fetch_assoc($result))
            {
                session_start();
				$_SESSION['did']=$row['id'];
                $_SESSION['dname']=$row['name'];
                $_SESSION['dphone']=$row['phone'];
                $_SESSION['demail']=$row['email'];
                $_SESSION['dpassword']=$row['password'];
				
				//header("Location: d_index.php");
				 echo "<script>window.location.href='d_index.php';</script>";
            }
        }
        else{

            echo "<p><b>User name  or  Pass. are invalid</b> or wait for approvle</p> ";
            
            }
        }
        ?>
       <br><br> <h3><p id="p1"><a href="developer.php">Create Account</a></p></h3>
      </form>
  </div>  
  </div>  
  </center>
 
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

