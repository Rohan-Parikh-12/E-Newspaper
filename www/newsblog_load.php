<html>
<body>
<head>
<style>
</style>
</head>





<table>
<thead>
<th> ID  </th>
<th> Place </th>
<th> Highlight </th>
<!-- <th> Description </th>-->
<th> Image </th>
<th> Date </th>

</thead>

<?php
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","displayupload") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM imgupload ORDER BY id DESC ";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<tr style="background-color:#eae7dc">
			<td>  <?php echo $row['id']; ?></td>
			<td> <b> <font	color="red" > <?php echo $row['place']; ?> </font> </b> </td>
			<td> <b> <?php echo $row['text']; ?> </b> </td>
			<!--<td> <b> <?php //echo $row['description']; ?> </b> </td> -->
			<td> <img src="<?php echo $row['image']; ?>" height="100px" width="150px"></td>
			<td style="width:120px"> <b>  <?php echo $row['date']; ?></b> </td>
			
			</tr>
			<?php
			
		}
	}
?>

</table>


</body>
</html>