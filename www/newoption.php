<html>
<head>
<title>OPTION</title>
</head>
<body>
<form action="newoption.php" method="get">
Name :<select name="name">
<option value="Divya Bhaskar">Divya Bhaskar</option>
<option value="Aaj Kaal">Aaj Kaal</option>
<option value="Gujarat Mitra">Gujarat Mitra</option>
<option value="Gujarat Samachar">Gujarat Samachar</option>
<option value="Mubai Samachar">Mubai Samachar</option>
<option value="Sanj Samachar">Sanj Samachar</option>
<option value="Sandesh">Sandesh</option>
<option value="Nobat">Nobat</option>
</select><br>
<!-- <input type="submit" name="submit" value="Insert"> -->
</form>
</body>
</html>
<?php
error_reporting(0);
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
    $c=mysqli_connect("localhost","root","","pdf") or  die("connected failed".mysqli_connect_error);    
	$q = "INSERT INTO `pdf`(paper) VALUES ('$name')";
		
		$query=mysqli_query($c,$q) or die ("error");
    if($q)
    {
        echo "<br>".$name."<br>"."inserted";
    }
    else
    {
        echo mysql_error();
    }
}
?>