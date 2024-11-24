<?php
error_reporting(0);
session_start();

?>

<html>
<head>

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

input
{
    border: 2px solid rgb(20, 20, 20);
    border-radius: 15px;
    font-size: 25px;
    width: 75%;
    margin: 10px; 
    padding: 3px;
}


</style>
</head>
<body>
<div class="fix">
<?php include 'a_header.php';?>
</div>

<br><br><br><br><br>
<center><h1>PDF Access </h1><h3>
<table width="85%">
<tr >
<th> Paper  </th>
<th> City </th> 
<th> PDF  </th>
<th> Date  </th>
<th> Developer ID  </th>
<th> Delete  </th>
</tr>
<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","pdf") or die("connected failed".mysqli_connect_error) ;

$sql="SELECT * FROM pdf";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        session_start();
     ?>   
	<tr style="background-color:#eae7dc">
    <td>  <?php echo $row['paper']; ?></td>
    <td > <?php echo  $row['city'];    ?></td>
    <td>  <?php echo $row['pdf'];     ?></td>
   <td>  <?php echo $row['date'];     ?></td>
   <td>  <?php echo $row['d_id'];     ?></td>
   <td>  <a href='a_pdf_delete.php?id=<?php echo $row['id'];?>'>Delete</a></td>
   </tr>
    <?php
    }
}
else{

    echo "Empty";
    
    }
?>
</tr>
</center>
<!-- table {
  border-spacing: 5px;
   
} -->



</table>
</body>
</html>