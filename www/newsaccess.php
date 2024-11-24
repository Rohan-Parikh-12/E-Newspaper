<?php
        echo $stu=$_GET['id'];
        error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$con =mysqli_connect($server,$username,$password,"displayupload");
if(!$con)
{
    die ("connected failed".mysqli_connect_error);
}
else
{
   // echo "connected";
}
$sql="DELETE  FROM imgupload WHERE id='{$stu}'";
if($con->query($sql)===true)
    {
		
       header("Location:d_upload.php");
    }
    else
    {
        echo "error".$con->error;
    }  
        ?>