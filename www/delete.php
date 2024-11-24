<?php
        echo $stu=$_GET['id'];
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
$sql="DELETE  FROM developer WHERE id='{$stu}'";
if($con->query($sql)===true)
    {
        header("Location:A_sucessfully.php");
    }
    else
    {
        echo "error".$con->error;
    }  
        ?>