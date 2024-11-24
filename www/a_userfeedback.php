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
.fix
{
	position: fixed;
    left: 0;
    top: 0; width:100%;
}
</style>

</head>
<body>
<?php 

error_reporting(0);
?>
<div class="fix">
<?php include 'a_header.php'; ?>
</div>

</body>
<center>

<br><br>
<h1>FEEDBACK</h1>
 <table>
<tr>
<th> I'd </th> 
<th> NAME </th>
<th> EMAIL </th>
<th> FEEDBACK </th>
<th> REQUEST </th>

</tr>



<?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="feedback";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
	

	$sql="SELECT * FROM feedback WHERE approve=0";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
     session_start();
	 ?>
	 
	

	<tr style="background-color:#eae7dc">
	
	 <td > <?php echo   $row['id'];    ?></td>
	 <td > <?php echo   $row['Name'];    ?></td>
	 <td><a href="mailto:<?php echo   $row['email']; ?>" style="color:red"> <?php echo $row['email']; ?></a> </td>
	<!--  <td > <?php echo   $row['email'];    ?></td> -->
    <td>  <?php echo   $row['Feedback'];    ?></td>
	<!-- <td> <a href='live_d.php?id=<?php echo $row['id'];?>'>delete</a> </td> -->
	 <td> <a href='f_request.php?id=<?php echo $row['id'];?>'>Send</a> </td>
	


	</tr>

	 
	<?php
    }
}
else{

    echo "<p>-:DATA NOT ENTERED YET:- </p>";
    
    }
?>
</table>

<br><br>
<h1>Sended Feedback</h1>
<table >
<tr>
<th> I'd </th> 
<th> NAME </th>
<th> FEEDBACK </th>
<th> Remove </th>

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
	<td> <a href='f_remove.php?id=<?php echo $row['id'];?>'>Remove</a> </td>
	


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