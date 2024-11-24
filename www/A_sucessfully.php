<?php
error_reporting(0);
session_start();
if(isset($_SESSION['id']))
{
$user=$_SESSION['name'];


?>


<html>
<head>

<title>Admin Panel</title>
<link rel="stylesheet" href="style.css">
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
.bottomm
{
	possession fixed;
	bottom:0;
	margin-left:0;
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
input
{
	width:70%;
}
</style>

</head>

<style>
/*
table {
  border-spacing: 6px;
  text-align:center;
} */



</style>
<body>
<?php include 'a_header.php';?>
<center>
<body>
<br>
<h1>LIVE NEWS</h1>
<form action="live.php" method="POST">
<input type = "text" name = "name" id = "name" value="||    ||"  placeholder = "Enter news" required>
 <br>
 <br><button>SUBMIT</button> <br>
 <br><br>
 </form>
 <table >
<tr >
<th> ID </th> 
<th> NEWS </th>
<th> DATE </th>
<th> DELETE </th>
<th> UPDATE </th>

</tr>



<?php
    error_reporting(0);
    $server ="localhost";
    $username ="root";
    $password ="";
    $database="live";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
	

	$sql="SELECT * FROM live";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
     session_start();
	 ?>
	 

	<tr style="background-color:#eae7dc">
	 <td > <?php echo   $row['id'];    ?></td>
	 <td > <?php echo   $row['news'];    ?></td>
    <td>  <?php echo   $row['date'];    ?></td>
	 <td> <a href='live_d.php?id=<?php echo $row['id'];?>'>Delete</a> </td>
	 <td> <a href='a_edit1.php?id=<?php echo $row['id'];?>'>Update</a> </td>
	


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
 <div class="bottomm">
 <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/804443/t/0"></script>
 </div>
</body>


</html>
<?php
}
else
{
    echo "error";
} ?>