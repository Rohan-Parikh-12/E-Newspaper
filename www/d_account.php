<html>
<head>

    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
    <title>EDIT</title>
	
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
<br>
<center><h1> Your Account Info</h1>
<br><br><br>
    
        <table>
            <tr>
                <th></th>
            </tr>
          
            <?php session_start(); 
            $user1=$_SESSION['did'];
            $con =mysqli_connect("localhost","root","","developer") or die("connected failed".mysqli_connect_error);
            $sql ="SELECT * FROM `developer` WHERE id='{$user1}'";
            $result = mysqli_query($con,$sql) or die("error");
            if(mysqli_num_rows($result)>0 )
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $_SESSION['name']=$row['name'];
                    $_SESSION['phone']=$row['phone'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['id']=$row['id'];
					$_SESSION['password']=$row['password'];

                    // header("Location:sucessfully.php");
                }
            }
            else
            {
                echo "";
            }
            ?>
       <br>
         <h3>Name :     <?php echo $_SESSION['name']; ;?><hr></h3>   
         <h3>Phone :    <?php echo $_SESSION['phone']; ;?><hr></h3>   
         <h3>Email :    <?php echo $_SESSION['email']; ;?><hr></h3>  
		<br>
		 <button> <a href="d_edit.php"> Edit info</a> </button>

         </table>  


</center>
</body>
</html>