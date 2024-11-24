<?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="developer";
$con =mysqli_connect($server,$username,$password,"developer") or die("connected failed".mysqli_connect_error);
$insert=false;
 if(isset($_POST['name'])==true)
 {
 $name = $_POST['name'];    
 $phone = $_POST['phone'];
 $email = $_POST['email'];

 $pa = $_POST['pa'];
 session_start();
$user1=$_SESSION['name'];
$user2=$_SESSION['phone'];
$user3=$_SESSION['email'];
$user6=$_SESSION['id'];
$user7=$_SESSION['password'];
echo $user6 ;
  $sql="UPDATE `developer` SET `name`='$name',`phone`=$phone,`email`='$email',`password`='$pa' WHERE id='{$user6}';";
      
   $result = mysqli_query($con,$sql) or die("error");
   
   if($con->query($sql)==true)
   {
        $insert=true;
    //  echo "sucefully connect";
   header("Location: d_account.php");
   }
  else
  {
      echo "error: $sql <br> $con->error";
  }
  $con->close();
     
}    

      
?>

<html>
<head>
    <title>Edit </title>
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
<body>

<?php include 'd_header.php';?>

  <div class="form-box">
  <div class="container">
<center><h2>Account Info</h2>


        
        <?php
         session_start();
         $user1=$_SESSION['name'];
         $user2=$_SESSION['phone'];
         $user3=$_SESSION['email'];

         $user6=$_SESSION['Id'];
         ?>
		 
        <form action="d_edit.php" method="POST">
        <input type = "text" name = "name" id = "name" value="<?php echo $user1 ; ?>">
       
        <br><input type = "text" name = "phone" id = "number" value="<?php echo $user2 ; ?>">
    
        <br><input type = "text" name = "email" id = "email" value="<?php echo $user3 ; ?>">
       

       
        <br><input type = "password" name = "pa" id = "pa" placeholder = " Create new password">


        <br><br>
		<br><button class="button button2">SUBMIT</button> <br><br>
        </form>
   
</center>
</div>
</div>
</body>
</html>