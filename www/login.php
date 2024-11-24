<?php
error_reporting(0);
ob_start();

$server ="localhost";
$username ="root";
$password ="";
$con =mysqli_connect($server,$username,$password,"user");
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
ob_start();
$name1=$_POST['name1'];
$pa2=$_POST['pa2'];
//echo $name1;
 //echo $pa2;
 $find="SELECT * FROM user WHERE name='{$name1}'";
 
//  $result=mysqli_query($con,$find)or die("error");
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
    <title>login</title>
	
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
input,select
{
	width: 100%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	background: transparent;
}
.buttonfix
{
	position: fixed;
}
</style>
</head>
<div class="fix">
<?php  include 'header.php';?>
</div>
<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>

<div class="form-box">
<h2>Login Here</h2>


    <!-- <img class="bg" src="baground.jpg" alt="error"> -->
  <div class="container">
      <h1>
      <br>
      </h1>
      <form action="login.php" method="POST">
		Email:
        <input type="text" name="name1" id="name1" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; } ?>" placeholder="Enter your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
		<br><br>
		Password:
       <br> <input type="password" name="pa2" id="pa2" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie']; } ?>" placeholder="Enter password"  pattern=".{6,}"   required title="6 characters minimum" required>
        <!-- <br><button class="su">submit</button> -->
		<br><br>
		<center><input type="checkbox" name="rememberme" checked id="rememberme" style="height:auto; width:auto"><b> &nbsp; Remember Me</b></center>

		<br><br>
		<center>
		
		<button class="button button2">SUBMIT</button> <br><br>
        <?php
        if(isset($_POST['name1']))
        {
error_reporting(0);
ob_start();

$server ="localhost";
$username ="root";
$password ="";
$database="user";

$email=$_POST['email'];
$password=$_POST['password'];

$con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
        $id= mysqli_real_escape_string($con,$_POST['name1']);
        $pa2=$_POST['pa2'];
        $sql ="SELECT * FROM `user` WHERE email='{$id}'AND password = '{$pa2}'";
        $result = mysqli_query($con,$sql) or die("error");
        if(mysqli_num_rows($result)>0 )
        {
           
            while($row=mysqli_fetch_assoc($result))
            {
                session_start();
                $_SESSION['name']=$row['name'];
                $_SESSION['city']=$row['city'];
                $_SESSION['phone']=$row['phone'];
                $_SESSION['email']=$row['email'];
                $_SESSION['password']=$row['password'];
                $_SESSION['id']=$row['id'];


				if(isset($_POST['rememberme']))
				{
					 setcookie("emailcookie",$_SESSION['email'],time()+(86400 *30 *2),"/");
					 setcookie("passwordcookie",$_SESSION['password'],time()+(86400 *30 *2),"/");
					 echo "<script>window.location.href='index.php';</script>";
					//header("Location:index.php");
				}
				else
				{
					echo "<script>window.location.href='index.php';</script>";
					//header("Location:index.php");
				}
                
            }
        }
        else{

            echo "<p>-:user name  or  pass are invalid:- </p>";
            
            }
        }
        ?>
       <b style="font-size:30px"><a href="sign.php">Create Account</a></b>
       <br><br><h4 style="background-color: cyan; width:100%; text-align:center;"><p id="p1"><a href="d_login.php"> Login as a Developer</a></p></h4> 
       
      </form>
  </div>  
  
  </center>

</div>  


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
 
 <script>
function goBack() 
{
  window.history.back();
}
</script>


</body>
</html>

