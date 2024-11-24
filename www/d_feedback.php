<?php
error_reporting(0);
session_start();
if(isset($_SESSION['dphone']))
{
$user=$_SESSION['dname'];


?>

<html> 
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
</head>
 <style>
td,th
{
    padding:10px;
	text-align:center;
} 
th
{
	position: sticky;
	top:45;
	border: 1px solid;
    padding: 10px;
    box-shadow: 5px 5px #888888;
    background-color:#d8c3a5;
    color:#e85a4f;
}


table
{
  //border-collapse: collapse; 
  //color:#66fcf1;
  color:#e98074;

  //border: 1px solid black;
  radius: 25px;
}
</style>
<body>
<?php include 'd_header.php';?>
<br>
<center>
<br><br><br>
<h1>FEEDBACK</h1>
 <table width="65%">
<tr>
<th> I'd </th> 
<th> NAME </th>
<th> FEEDBACK </th>

</tr>



<?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="feedback";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
	

	$sql="SELECT * FROM feedback WHERE approve=1";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
     session_start();
	 ?>
	 

	<tr style="background-color:#eae7dc">
	 <td > <?php echo   $_SESSION['id']=$row['id'];    ?></td>
	 <td > <?php echo   $_SESSION['Name']=$row['Name'];    ?></td>
	 
    <td>  <?php echo   $_SESSION['Feedback']=$row['Feedback'];    ?></td>
	<!-- <td> <a href='live_d.php?id=<?php echo $row['id'];?>'>delete</a> </td> -->
	


	</tr>

	 
	<?php
    }
}
else{

    echo "<p>-:data not found :- </p>";
    
    }
?>
 </table>
 </center>
 </html>
 
 <?php
}
else
{
    echo "error";
} ?>