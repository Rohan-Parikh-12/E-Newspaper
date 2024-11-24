<?php
        echo $stu=$_GET['id'];
        error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$con =mysqli_connect($server,$username,$password,"pdf");
if(!$con)
{
    die ("connected failed".mysqli_connect_error);
}
else
{
   // echo "connected";
}
$sql="DELETE  FROM pdf WHERE id='{$stu}'";
if($con->query($sql)===true)
    {
        header("Location:a_pdf.php");
    }
    else
    {
        echo "error".$con->error;
    }  
?>