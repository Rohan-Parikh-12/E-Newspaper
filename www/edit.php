  <?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="user";
$con =mysqli_connect($server,$username,$password,"user") or die("connected failed".mysqli_connect_error);

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

  $sql="UPDATE `user` SET `name`='$name',`phone`=$phone,`email`='$email',`password`='$pa' WHERE id='{$user6}';";
  
   $result = mysqli_query($con,$sql) or die("your phone number or email already been taken ! Please login or try with using another phone number or email");
   
   
   if($con->query($sql)==true)
   {
    //  echo "sucefully connect";
   header("Location: account.php");
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

input
{
	font-weight: 1000;
	text-align:center;
}
::placeholder {
  color: red;
  opacity: 0.4; /* Firefox */
}

.buttonfix
{
	margin-top:55px;
	position: fixed;
}


.v1 
{
  position: fixed;
  border-left: 20px solid #DAB046;
  margin-left:37.3%;
  height: 61%;
 // border-bottom-left-radius: 25px;
 // border-bottom-right-radius: 25px;
  opacity: 0.2;
  
}
.v2 
{
  position: fixed;
  border-left: 20px solid #D73B25;
  margin-left:41.5%;
  height: 61%;
  opacity: 0.2;
}
.v3
{
  position: fixed;
  border-left: 20px solid #C71B25;
  margin-left:46.5%;
  height: 61%;

  opacity: 0.2;
}
.v4
{
  position: fixed;
  border-left: 20px solid #961A39;
  margin-left:51%;
  height: 61%;
  opacity: 0.2;
}
.v5 
{
  position: fixed;
  border-left: 20px solid #601035;
  margin-left:56%;
  height: 61%;

  opacity: 0.2;
}
.v6
{
  position: fixed;
  border-left: 20px solid #3a0920;
  margin-left:61%;
  height: 61%;

  opacity: 0.2;
}


#gradient {
    background: #999955;
    background-image: linear-gradient(#DAB046 20%, #D73B25 20%, #D73B25 40%, #C71B25 40%, #C71B25 60%, #961A39 60%, #961A39 80%, #601035 80%);
    margin: 0 auto;
    margin-top: 99px;
    width: 0;
    height: 430px;
	z-index: -5;
	position:fixed;
}

</style>
    
</head>
<body>

<?php include 'header.php';?>

<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
    <br><br>
	 <div id="gradient">
	
	 <div class="v1"></div>
	 <div class="v2"></div>
	 <div class="v3"></div>
	 <div class="v4"></div>
	 <div class="v5"></div>
	 <div class="v6"></div>
	 <div class="v7"></div>
</div>
  <div class="form-box">
  <div class="container">

<center><h2>Account Info</h2>


        
        <?php
         session_start();
         $user1=$_SESSION['name'];
         $user9=$_SESSION['city'];
         $user2=$_SESSION['phone'];
         $user3=$_SESSION['email'];

         $user6=$_SESSION['Id'];
         ?>
		 
        <form action="edit.php" method="POST">
		
    <div id="card">
        <input type = "text" name = "name" id = "name" value="<?php echo $user1 ; ?>" maxlength="12" size="12" required >
		<br>
       
	   	<!--	<select name="city" style="text-align: center" id = "city" value="<?php echo $user9 ; ?>" required>
				<option value="" disabled selected>Select your city which you want to update</option>
				<option value="Ahmedabad">Ahmedabad</option>
				<option value="Vadodara">Vadodara</option>
				<option value="Surat">Surat</option>
				<option value="Jamnagar">Jamnagar</option>
				<option value="Rajkot">Rajkot</option>
		
			</select> -->
	   
        <br><input type = "text" name = "phone" 
        id = "number" value="<?php echo $user2 ; ?>" pattern="[7-9]{1}[0-9]{9}" required>
		<br>
    
        <br><input type = "text" name = "email" 
        id = "email" value="<?php echo $user3 ; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
		<br>
       

       
        <br><input type = "password" name = "pa" 
        id = "pa" placeholder = " Enter Your New Password"  pattern=".{6,}"   required title="6 characters minimum" required>
		<br>


        <br><br>
		<br><button class="button button2">SUBMIT</button> <br><br>
        </form>
   
</center>
</div>
</div>
</div>

<script>
function goBack() 
{
  window.history.back();
}
</script>

</body>
</html>