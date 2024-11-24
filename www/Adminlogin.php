<?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$con =mysqli_connect($server,$username,$password,"admin");
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
 $find="SELECT * FROM login WHERE id='{$name1}'";
 
//  $result=mysqli_query($con,$find)or die("error");
?>

<html>
<head>
	<link rel="stylesheet" href="style.css">

    <title>Admin Login</title>
	
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

<body>

<?php include 'header.php';?>
<br><br><br><br><br>
<center>
  <div class="form-box">
  <h2>Login Here</h2>
  <div class="container">

      <h1>
      <br>
      </h1>
      <form action="Adminlogin.php" method="POST">
        <input type="text" name="name1" id="name1" placeholder="Enter Email " required>
		<br>
       <br> <input type="password" name="pa2" id="pa2" placeholder="Enter password"required>
	   <br>
        <br><button>submit</button>
        <?php
        if(isset($_POST['name1']))
        {
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="admin";
$con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
        $id= mysqli_real_escape_string($con,$_POST['name1']);
        $pa2=$_POST['pa2'];
         $sql ="SELECT `id`, `pass`  FROM `login` WHERE id='{$id}'AND pass = '{$pa2}'";
        $result = mysqli_query($con,$sql) or die("error");
        if(mysqli_num_rows($result)>0 )
        {
           
            while($row=mysqli_fetch_assoc($result))
            {
                session_start();
                $_SESSION['id']=$row['id'];
                $_SESSION['pass']=$row['pass'];
				//header("Location:A_sucessfully.php");
				echo "<script>window.location.href='A_sucessfully.php';</script>";
            }
        }
        else{

            echo "<p>-:user name  or  pass are invalid:- </p>";
            
            }
        }
        ?>
    <!--   <br> <a href="sign.php">create account</a> -->
      </form>
  </div>  
  </div>  
  </center>
</body>
</html>

