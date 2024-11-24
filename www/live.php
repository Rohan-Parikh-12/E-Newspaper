<?php
error_reporting(0);

if(isset($_POST['name'])==true)
{
	$server ="localhost";
	$username ="root";
	$password ="";
	$database="live";
	$con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);

	$news=$_POST['name'];
	echo $sql= "INSERT INTO `live`(`news`, `date`)  VALUES ('$news',current_timestamp());";
     if($con->query($sql)==true)
    {
         $insert=true;
     //  echo "sucefully connect";
    header("Location:A_sucessfully.php");
    }
   else
   {
       echo "error: $sql <br> $con->error";
   }
}
else
{
header("Location:index.php");
}
?>