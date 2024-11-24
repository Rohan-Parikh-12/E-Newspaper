<?php error_reporting(0); ?>
<html>

<head>
	<title>PDFblog</title>
	<link rel="stylesheet" href="../NEW/style.css">
</head>

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

<body>
<?php include '../NEW/d_header.php';?>
<br>


<?php
if(isset($_POST['open']))
{
	if($_POST['name']=="Divya Bhaskar")
	{
		?>
		<p>CHOOSE NEWSPAPER BRANCH</p>
		<br><br>
		<h3>
		<a href="../New/Divya Bhaskar/divyabhaskarAhmedabad_pdfselect.php">Ahmedabad</a>
		<br><br>
		<a href="../New/Divya Bhaskar/divyabhaskarJamnagar_pdfselect.php">Jamnagar</a>
		</h3>
		<?php
	}
	else{}

	if($_POST['name']=="Aaj Kaal")
	{
		echo "Hello From Aaj Kaal";
	}
	else{}
	
	if($_POST['name']=="Gujarat Mitra")
	{
		echo "Hello From Gujarat Mitra";
	}
	else{}
	
	if($_POST['name']=="Gujarat Samachar")
	{
		echo "Hello From Gujarat Samachar";
	}
	else{}
	
	if($_POST['name']=="Mubai Samachar")
	{
		echo "Hello From Mubai Samachar";
	}
	else{}
	
	if($_POST['name']=="Sanj Samachar")
	{
		echo "Hello From Sanj Samachar";
	}
	else{}

	if($_POST['name']=="Sandesh")
	{
		echo "Hello From Sandesh";
	}
	else{}
	
	if($_POST['name']=="Nobat")
	{
		echo "Hello From Nobat";
	}
	else{}
}
else{ }
?>


</body>
</html>
<!-- 	echo "$_POST['name'==Divya Bhaskar]";
	if($row['date']=="2021-04-22" && $row['paper']=="Sanj Samachar" )
	{
		
	} -->