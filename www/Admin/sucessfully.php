<?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="admin";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
	
	$sql="SELECT * FROM admin";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        session_start();
        $_SESSION['name']=$row['name'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
		echo "meet";
    }
}
else{

    echo "<p>-:user name  or  pass are invalid:- </p>";
    
    }
?>