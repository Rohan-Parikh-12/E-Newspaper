<html>
<head>
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="editinfo.css">
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
hr
{
	width:40%;
}

.buttonfix
{
	position: fixed;
}
	</style>
	
</head>
<body>
<?php include 'header.php';?>
<br>
<br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
<br><br>
<center>
<h1>Your Account Information</h1>
<br><br><br>
    
        <table>
            <tr>
                <th></th>
            </tr>
          
            <?php session_start(); 
            $user1=$_SESSION['id'];
            $con =mysqli_connect("localhost","root","","user") or die("connected failed".mysqli_connect_error);
            $sql ="SELECT * FROM `user` WHERE id='{$user1}'";
            $result = mysqli_query($con,$sql) or die("error");
            if(mysqli_num_rows($result)>0 )
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $_SESSION['name']=$row['name'];
                    $_SESSION['city']=$row['city'];
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
			
 <div id="gradient"></div>
    <div id="card">
       <br>
         <h3><p>Name :     <?php echo $_SESSION['name']; ;?></p></h3>   
         <h3><p>City :     <?php echo $_SESSION['city']; ;?></p></h3>   
         <h3><p>Phone :    <?php echo $_SESSION['phone']; ;?></p></h3>   
         <h3><p>Email :    <?php echo $_SESSION['email']; ;?></p></h3>  
		<br>
		<br><br>
		<form action="edit.php">
		    <button>  Edit Information </button>
		</form>
		</div>
		

         </table>  


</center>

<script>
function goBack() 
{
  window.history.back();
}
</script>
</body>
</html>