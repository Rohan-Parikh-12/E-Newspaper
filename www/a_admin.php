<html>
<head>

<style>
	body
	{
	background-image: url(pexels-splitshire-1587.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	cursor: cell;
	
	}
</style>

</head>
<body>
<?php 

error_reporting(0);
include 'a_header.php';

?>
</body>
<center>
<br><br>
<h1>ADMIN</h1>
<table border="3"> 
<tr>
<th> EMAIL </th> 

</tr>



<?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="admin";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
	
	$sql="SELECT * FROM login";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
     session_start();
	 ?>
	 
	<tr>
	<td > <?php echo   $row['id'];    ?></td>
	</tr>

	<?php
    }
}
else
{
    echo "<p>-:DATA NOT ENTERED YET :- </p>";   
}
?>
 
 </center>
 </html>