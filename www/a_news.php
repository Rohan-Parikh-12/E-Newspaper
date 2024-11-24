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


</style>
</head>
<body>
<div class="fix">
<?php include 'a_header.php';?>
</div>

<br><br><br><br><br>
<center><h1>News Access </h1><h3>
<table width="85%">
<tr style="background-color:white">
<th> Place </th>
<th> Description </th>
<th> Image </th>
<th style="width:90px"> Date </th>
<th> Developer ID </th>
<th> Delete </th>
</tr>
<?php 
error_reporting(0);
$con =mysqli_connect("localhost","root","","displayupload") or die("connected failed".mysqli_connect_error) ;

$sql="SELECT * FROM imgupload";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        session_start();
     ?>   
	<tr style="background-color:#eae7dc">
    <td>  <?php echo $row['place']; ?></td>
    <td > <?php echo  $row['text'];    ?></td>
   <td> <img src="<?php echo $row['image']; ?>" height="100px" width="150px"></td>
   <td style="width:120px">  <?php echo $row['date'];     ?></td>
   <td style="width:120px">  <?php echo $row['d_id'];     ?></td>
   <td style="width:80px">  <a href='a_news_delete.php?id=<?php echo $row['id'];?>'>Delete</a></td>
   </tr>
    <?php
    }
}
else{

    echo "Empty";
    
    }
?>