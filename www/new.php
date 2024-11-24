<html>
<head>
	<title>Upload</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
<?php include 'd_header.php';?>


<center><h1>મુખ્યસમાચાર</h1></center>
<br>
<table class="table table-bordered table-stripted">
<thead>

<th> PDF </th>


</thead>

<tbody>

<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'pdf');

if(isset($_POST['submit']))
{

	$files= $_FILES['file'];

	

	
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];
	

	
	$fileext=explode('.',$filename);
	$filecheck= strtolower(end($fileext));
	
	$fileextstored = array('pdf');
	if(in_array($filecheck,$fileextstored))
	{
		$destinationfile='pdf/'.$filename;
		move_uploaded_file($filetmp,$destinationfile);
		
		echo $q = "INSERT INTO `pdf`(pdf) VALUES ('$destinationfile')";
		
		$query=mysqli_query($con,$q) or die ("error");
		
		$displayquery="select * from pdf";
		$querydisplay=mysqli_query($con,$displayquery);
		
		
		while ($result = mysqli_fetch_array($querydisplay)) {
		
		?>
		
		<tr>
			
			<td> <a src= "<?php echo $result['pdf']; ?>" > </a></td>

			
		</tr>
		
		<?php
		
		}
		header("Location: pdf.php");
	}
	else{echo "Error";}
}
?>

</tbody>
</table>
</body>
</html>