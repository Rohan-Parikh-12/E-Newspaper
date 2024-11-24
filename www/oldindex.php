<!-- For Backgroung Image -->
<!-- for 3 parts of image -->
<!-- For center Image -->
<!-- For orizontal Navigation Bar -->

<html>
<head>
<title> E-papers </title>
<style>



html 
{
  scroll-behavior: smooth;
}

hr
{
	 border: 5px solid black;
}
.center
{
	text-align: center; 
}

.row::after 
{
  content: "";
  clear: both;
  display: table;
}

<!-- for pointer/cursor 
body {cursor: cell;}
-->

* 
{
  box-sizing: border-box;
}


.column 
{
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 200px;
}

<!--Clearfix (clear floats) -->


<head>
.container
{
	max-width:800px;
}


table, th, td
{
	width:60%;
	table-layout:fixed;
	text-align:center;
	font-size:15px;
	border-collapse:collapse;
	border: 1px solid black;
	//border:1px solid skyblue;
	
}
tr, th, td
{
	padding:2px;
}
th
{
	background:Black;
	color:white;
}
td
{
	background:white;
	
}
td:hover
{
	background:Gray;
}


/* scroll bar */


/* width */
::-webkit-scrollbar {
  width: 7px;
  cursor: cell;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;

}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #303030; 
  border-radius: 10px;

}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: gray;

}

/* textarea */
textarea
{
	resize: vertical;
}


/* footer */
.footer 
{


  margin-top: 35px;
  height: 70px;
  background-color:white;
  width:60%;
  max-width:800px;
  align:center;
  text-align:left;
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
  margin-bottom: 2px;
}

.img {

  padding-right: 30px;
  margin-top: -61px;
  text-align:right;

}

h1.text 
{
  padding-left: 30px;
  padding-top: 15px;
}

input.right 
{
	float: right;
}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  color:black;
  cursor: pointer;
  outline: none;
  background-color: white;
  border: none;
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
  box-shadow: 0 9px #999;
  margin-bottom: 50px;
}

.button:hover 
{
	background-color: black;
	color:white;
}

.button:active {
  background-color: gray;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

img{
  color: white;
  text-shadow: 2px 2px 4px #000000;
}


</style>
<link rel="icon" href="icon1.png" type="image" sizes="17x17">
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

</head>

<body>

<?php include 'header.php';?>

	
	<div class="center">
		
		<div style="background-color:#333333">
	
			<p class="double" style="font-size:4vw" ><font color="white">E-NEWSPAPERS</font></p>
		
		</div>
		
		  <!-- <a href="#feedback">FeedBack</a> -->
		
<?php
session_start();
if(isset($_SESSION['name']))
{
$user=$_SESSION['name']; ?>			
<b>
<marquee>
<h3>
<?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="live";
$con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);

$sql="SELECT * FROM live";
$result = mysqli_query($con,$sql) or die("error");
if(mysqli_num_rows($result)>0 )
{
   
    while($row=mysqli_fetch_assoc($result))
    {
     session_start();
	 
	 echo    "&nbsp; &nbsp; &nbsp;".$_SESSION['news']=$row['news'];  

	}
}
else
{
	echo "error";
}
?>
</h3>
</marquee>
</b>
<?php
} else {}
?>
	
		<div class="row">
				
			<div class="column">
				<a href="Divyabhashkar.php">
				<img src="divyabhasker-logo.jpg" alt="divya bhasker"  height="100" width="255">	
				</a>
			</div>
			
			<div class="column">
			<br>
				<a href="Aajkal.html">
				<img src="aajkaal-logo.jpg" alt="aajkaal"  height="60" width="230">
				</a>
			</div>
			
			<div class="column">
			<br>
				<a href="Gujaratmitra.html">
				<img src="gmlogo.jpg" alt="Gujarat Mitra"  height="70" width="240">
				</a>
			</div>
	
			<div class="column">
			<br>
				<a href="GujaratSamachar.html">
				<img src="GujaratSamachar.jpg" alt="divya bhasker"  height="70" width="250">	
				</a>
			</div>
			
			<div class="column">
				<a href="Mumbaisamachar.html">
				<img src="Mumbaisamacharlogo.png" alt="Mumbai Samachar"  height="75" width="245">
				</a>
			</div>
			
			<div class="column">
				<a href="sanjsamachar.html">
				<img src="sanjsamachar-logo.jpg" alt="Sanj Sandesh"  height="65" width="255">
				</a>
			</div>
			
			<div class="column">
				<a href="Sandesh.html">
				<img src="sandesh-logo2.jpg" alt="sandesh"  height="100" width="180">	
				</a>
			</div>
			
			<div class="column">
				<a href="Nobat.html">
				<img src="nobat-logo2.jpg" alt="Nobat"  height="100" width="225">
				</a>
			</div>

		</div>
	</div>

<body>
<div class="main" id="feedback">
<br>
<hr>
<br>
<div class ="container">

	<table align="center"> 
	
		<tr>
			<th><h1>FeedBack Form</h1></th>
			<th><h1>About us</h1></th>
		
		</tr> 

	
		<tr>
			
			<td>
				<form action="form.php" method="POST">
				<b>Name:</b><br>
				
				<input type="text" placeholder="abc" id="name" name="name" required><br><br>
				
				<b>Email:</b><br>
				
				<input type="email" placeholder="example@example.com" id="email" name="email" required><br><br>
				
				<b>FeedBack:</b><br>
			 
					
					<textarea id="feedback" name="feedback" placeholder="Enter your Requrnment/Problem here.." style="height:100px" cols="22" required></textarea><br>
					
				
				<button>Send</button> 
				
				</form>
			</td>

			<td>
			
				<h3>
				
					Member 1: Meet Barad<br>
					Enrolment No. 186250307503<br>
					<br>
					Member 2: Dhruv Raval<br>
					Enrolment No. 186250307057<br>
					<br>
					Member 3: Rohan Parikh<br>
					Enrolment No. 186250307058
				
			
				</h3>
			</td>
		</tr>
		
	</table>

</div>

<center>

<div class="footer" >

	<h1 class="text" >Follow Us</h1>
	
	<div class="img">

		<a href="https://www.facebook.com/e.newspaper.9" target="_blank">
			<img src="facebook.jpg" height="50px" width="50px">
		</a>
		&nbsp;&nbsp;&nbsp;
		<a href="https://twitter.com/ENEWSPAPER599" target="_blank">
			<img src="twitter1.jpg" height="50px" width="50px">
		</a> 
		&nbsp;&nbsp;&nbsp;
		<a href="mailto:enewspaper599@gmail.com" target="_blank">
			<img src="mail.jpg" height="50px" width="50px">
		</a> 

	</div>
	
</div>

	<a href="#top">
		<input type="button" class="button" value="PRESS TO FLY">
		<!--<button class="block">PRESS TO FLY</button> -->
	</a>
	
</center>
</div>



</body>
</html>