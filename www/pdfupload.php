<html>
<head>
	<title>Upload</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'd_header.php';?>
<br><br>
<center><h1>Divya Bhaskar</h1></center>
<br>



<?php
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","pdf") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM pdf";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
		
			<a href="<?php echo $row['pdf']; ?>"> PDF </a> 
		
			
			<?php
			
		}
	}
?>