<?php
error_reporting(0);
session_start();
if(isset($_SESSION['dname']))
{
	$d_id=$_SESSION['did'];
$user=$_SESSION['name'];
?>

<html>
<head>
	<title>Upload</title>
	
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">

</head>
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

input
{
    border: 2px solid rgb(20, 20, 20);
    border-radius: 15px;
    font-size: 25px;
    width: 75%;
    margin: 10px; 
    padding: 3px;
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
</style>

<body>
<?php include 'd_header.php';?>


<center><h1>મુખ્યસમાચાર</h1>
<br>
<table width="85%">
<tr style="background-color:white">
<th> Place </th>
<th> Description </th>
<th> Image </th>
<th> Date </th>
<th> Delete </th>
</tr>

<?php
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","displayupload") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM imgupload WHERE `d_id`='$d_id'";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<tr style="background-color:#eae7dc">
			<td style="width:200px" > <b> <font	color="red" > <?php echo $row['place']; ?> </font> </b> </td>
			<td> <b> <?php echo $row['text']; ?> </b> </td>
			<td style="width:80px"> <img src="<?php echo $row['image']; ?>" height="100px" width="150px"></td>
			<td style="width:120px"> <b>  <?php echo $row['date']; ?></b> </td>
			<td style="width:80px">  <a href='newsaccess.php?id=<?php echo $row['id'];?>'>Delete</a></td>
			</tr>
			<?php
			
		}
	}
?>
</center>
<?php
}
else
{
    echo "error";
}
?>