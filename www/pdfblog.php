<?php
error_reporting(0);
?>
<html>
<head>
	<title>PDFBLOGs</title>
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
	
select
{
	width: 100%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 5px;
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

.left 
{ 
	position:fixed;
	width:40%; 
	
	
}
.right
{
	float:right;
	width:60%; 
}
div.myscroll 
{
  height: 400px;
  width: 800px;
  overflow-y: scroll;
  border-radius: 5px;
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

<br><br>

<div class="left">
  <div class="form-box">
  
  <div class="container">
<h2>PDF</h2>
<form action="pdfname1.php" method="post" enctype="multipart/form-data">


<br><br>

<center>

Select Newspaper  :<br><select name="paper" required> 
<option value="" disabled selected>Choose a Paper</option>
<option value="Divya Bhaskar">Divya Bhaskar</option>
<option value="Aaj Kaal">Aaj Kaal</option>
<option value="Gujarat Mitra">Gujarat Mitra</option>
<option value="Gujarat Samachar">Gujarat Samachar</option>
<option value="Mubai Samachar">Mubai Samachar</option>
<option value="Sanj Samachar">Sanj Samachar</option>
<option value="Sandesh">Sandesh</option>
<option value="Nobat">Nobat</option>
</select><br>
<br>
		City :<br><select name="city" style="text-align: center" required> 
				<option value="" disabled selected>Choose a city</option>
				<option value="Ahmedabad">Ahmedabad</option>
				<option value="Vadodara">Vadodara</option>
				<option value="Surat">Surat</option>
				<option value="Jamnagar">Jamnagar</option>
				<option value="Rajkot">Rajkot</option>
		
			</select><br>
			<br><br>
	<lable> Pdf </lable>
	<input type="file" name="file" id="file" required>
	<br><br>
	<lable> Date </lable>
	<input type="date" name="date" id="user" required>
		<br><br>
<button name="open" >Submit</button>


</center>

</div>
</div>
</form>
</div>
<div id="div_refresh">
<div class="right">
<br><br><br><br><br><br><br>
<div class="myscroll">

<center>

<table width="100%">
<tr style="background-color:#d8c3a5; color:#e85a4f; ">
<th> ID </th>
<th> PAPER  </th>
<th> CITY  </th> 
<th> PDF </th>
<th> DATE  </th>

</tr>
<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","pdf") or die("connected failed".mysqli_connect_error) ;

$sql="SELECT * FROM pdf ORDER BY id DESC";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        session_start();
     ?>   
	<tr style="background-color:#eae7dc">
    <td>  <?php echo $row['id']; ?></td>
    <td>  <?php echo $row['paper']; ?></td>
    <td > <?php echo  $row['city'];    ?></td>
    <td>  <?php echo $row['pdf'];     ?></td>
    <td style="width:120px">  <?php echo $row['date'];     ?></td>
 
   </tr>
    <?php
    }
}
else{

    echo "Empty";
    
    }
?>

</center>
</table>
</div>
</div>
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("phpblog.php");
        setInterval(function() {
            $("#div_refresh").load("phpblog.php");
        }, 1000);
    });
 
</script>

</body>
</html>