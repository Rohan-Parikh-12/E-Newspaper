<html>
<head>
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
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
td,th
{
    padding:10px;
	text-align:center;
} 
th
{
	position: sticky;
	top:0;
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

</head>
<body>
<?php 

error_reporting(0);
include 'a_header.php';

?>
</body>
<center>
<h1>USER</h1>
<table > 
<tr>
<th> NAME </th> 
<th> PHONE </th>
<th> EMAIL </th>
<th> DELETE </th>
</tr>



<?php
    
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="user";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
	
	$sql="SELECT * FROM user";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
     session_start();
	 ?>
	 

	<tr style="background-color:#eae7dc" >
	<td > <?php echo   $row['name'];    ?></td>
    <td>  <?php echo    $row['phone'];    ?></td>
    <td>  <?php echo    $row['email'];     ?></td>
    <td> <a href='d_d.php?id=<?php echo $row['id'];?>'>Delete</a> </td>
	</tr>

	 
	<?php
    }
}
else{

    echo "<p>-:DATA NOT ENTERED YET :- </p>";
    
    }
?>
 </table>
 </center>
 </html>