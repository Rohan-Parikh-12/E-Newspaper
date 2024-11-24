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
<table style="float:left; width:100%; margin-left: 35px; ">
<thead>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
<th>  </th>
</thead>

<?php
	error_reporting(0);
	$con=mysqli_connect("localhost","root","","displayupload") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM imgupload ORDER BY id DESC";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
		
			<tr>
			<td> <b style="text-shadow: 1px 1px 1px #000000"> <font	color="red"> <?php echo $row['place']; ?> </font> </b> </td> 
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td> <b> <?php echo $row['text']; ?> </b> </td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td> <img src="<?php echo $row['image']; ?>" style="border-radius: 4%" height="100px" width="150px"></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<!--<td style="width:90px"> <b>  <?php //echo $row['date']; ?></b> </td> -->
			<td style="width:90px"> <b>  <a href="detailnews.php?idd=<?php echo $row['id'];?>">More Details</a></b> </td>
			
			</tr>
			
			<tr>
			
			<td><br><hr><br></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td><br><hr><br></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td><br><hr><br></td>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td><br><hr><br></td>
		
		</tr>
		
			
			<?php
			
		}
	}
?>
</div>
		<div class="right">
        <div class="myscroll" style="margin-left: 265%">
		
        <center>&nbsp;&nbsp;&nbsp; Recent News</center><a class="twitter-timeline"  href="https://twitter.com/ENEWSPAPER599?ref_src=twsrc%5Etfw">Tweets by ENEWSPAPER599</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
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