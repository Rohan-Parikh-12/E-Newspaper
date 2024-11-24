<html>
<head>
	<title>Upload</title>


<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
<link rel="stylesheet" href="style.css">
<style>
body
{
	background-image: url(istockphoto-1068438600-640x640.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	cursor: cell;
	
}
/* Twitter */

div.myscroll 
{
  background-color: lightblue;
  height: 400px;
  width: 210px;
  overflow-y: scroll;
  border-radius: 5px;
}
.left
{
	#position:fixed;
	width:70%;
	margin-left:5%;
}
.right 
{ 
	position:fixed;
	width:30%; 
}

 body
{
	margin: 0;
	
	background-image: url(istockphoto-1068438600-640x640.jpg);
	cursor: cell;
} 
.dark-mode 
{
  
  background-image: url(dark1.jpg);
  color: black;
}
  .dark-mode  font	{
  color: white;
  text-shadow: 1px 1px 1px #000000;
  
}
.dark-mode  h1
{
  color: white;
  text-shadow: 1px 1px 1px #000000;  
}
.dark-mode  b
{
  color: #FFFDD0;
   
}

.buttonfix
{
	position: fixed;
}






div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}




</style>
</head>

<body>
<div class="header" id="myHeader">
<?php include 'header.php';?>
</div>
<br><br><br>

<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>

<center><h1>મુખ્યસમાચાર</h1></center>
<br>
<hr>
<br>
<br>
<br>


<div class="left">


<?php
 $idd1=$_GET['idd'];
 
 
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","displayupload") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM imgupload where id=$idd1 ORDER BY id DESC";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>


			<br>
			<h1>
				<b style="text-shadow: 1px 1px 1px #000000"> <font	color="red"> <?php echo $row['place']; ?> </font> </b>
				<br>
				<b> <?php echo $row['text']; ?> </b>
			</h1>
			<br>
			<h3>
			<b style="width:90px">  <?php echo $row['date']; ?></b>
			</h3>
			<br>
			<hr>
			<br>
			<table>
			  <tr>
				<th valign="top"><img src="<?php echo $row['image']; ?>" style="border-radius: 4%" height="300px" width="450px"></th>
				<th><h3><b> <?php echo $row['description']; ?> </b></h3></th>
			  </tr>
			</table>
			
			<br>
			<hr>
			<br><br>
			
			
			</div>
	
			<?php
			
		}
	}
?>

		<div class="right" style="top:25%">
        <div class="myscroll" style="margin-left: 265%">
		
        <center>&nbsp;&nbsp;&nbsp; Recent News</center><a class="twitter-timeline"  href="https://twitter.com/ENEWSPAPER599?ref_src=twsrc%5Etfw">Tweets by ENEWSPAPER599</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
        </div>
		





<div class="left" style="padding-left:20%; width:50%">

<br><br><br><br>
<center><h1>Other News</h1></center>
<br><br><br><br>


<?php
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","displayupload") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM imgupload where id!=$idd1 ORDER BY id DESC";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
				<a href="detailnews.php?idd=<?php echo $row['id'];?>">
				<div class="gallery">	
					<img src="<?php echo $row['image']; ?>" style="border-radius: 4%" height="300px" width="450px">
				  <div class="desc"><b style="text-shadow: 1px 1px 1px #000000"> <font	color="red"> <?php echo $row['place']; ?> </font> </b></div>
				</div>
				</a>
			<?php
			
		}
	}
?>
</div>




<script>
function goBack() 
{
  window.history.back();
}
</script>
		
		
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>