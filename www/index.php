<?php error_reporting(0);

session_start(); ?>
<html>

<head>

  <meta charset="UTF-8">
  <link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sansita'>
  <link rel='stylesheet' href='popup.css'>
  
<style>

html 
{
  scroll-behavior: smooth;
}


body
{
	margin: 0;
	background: #f5f5f5;
	//background: #fffef2;
	cursor: cell;
	
}
.dark-mode 
{
  //background-color: #5f5f5f;
  //background-color: #5e5e5e;
  background-color: #787878;
  color: black;
}

.dark-mode  ::placeholder 
{
  color: white;
  opacity: 0.7; /* Firefox */
}
.dark-mode  textarea
{
border: 1px solid #999;
}

.dark-mode .zoom
{
	
    padding-bottom: 28%;
	//background-image: url(pexels-splitshire-1587.jpg);
	background-image: url(dark1.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
		
}
.dark-mode .redbtn button
{

	box-shadow: 0px 0px 7px black;
	background: black;

}
.redbtn button
{
		padding: 10px 20px;
	border: none;
	background: #ff1100;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	border-radius: 30px;
	box-shadow: 0px 0px 7px red;
}

header{
	position: relative;
}

.title{
	text-align: center;
}

h2{


	font-size: 6vw;
	line-height: 1.125;
	font-family: 'Sansita';
	text-transform: uppercase;
}


footer {
	text-align: center;
	font-size: .8rem;
	font-weight: bold;
	color: #f8f8f8;
}

.zoom{
	
    padding-bottom: 28%;
	//background-image: url(pexels-splitshire-1587.jpg);
	background-image: url(istockphoto-1068438600-640x640.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
		
}
.title{
	position: absolute;
	top: 40%;
	width: 100%;
}
.title h1{
	text-align: center;
	color: #FFF;
}



/*  */


hr
{
	 border: 5px solid black;
}

* 
{
  box-sizing: border-box;
}


.column 
{
  float: left;
  width: 33.33%;
  padding: 20px;
  height: 200px;
}

.header{

  color: #f1f1f1;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.footercolor
{
	background-color: #727272;
}

.center
{
	padding-top: 2%;
	text-align: center; 

}

/*
.container
{
	max-width:800px;
} */

.row::after 
{
	
  content: "";
  clear: both;
  display: table;
}




table, th, td
{
	width:45%;
	table-layout:fixed;
	text-align:center;
	font-size:15px;
	border-collapse:collapse;
	border: 2px solid white;
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



/* scroll bar */


/* width */
::-webkit-scrollbar {
  width: 7px;
  cursor: cell;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px yellow; 
  border-radius: 10px;

}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #c9c900; 
  border-radius: 10px;

}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #e3df62;

}

/* textarea */
textarea
{
	text-align:center;
	resize: vertical;
	border-radius: 10px;
	background: transparent;
}
textarea:hover
{
	//color:white;
	//background-color: black;
	box-shadow: 0px 0px 15px #61C5FA;
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


input
{
	text-align:center;
	width: 50%;
	height: 20px;
	border-radius: 10px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	caret-color: red;
	background: transparent;
	
} 
input:hover
{
	caret-color: red;
	//background-color: black;
	box-shadow: 0px 0px 15px #61C5FA;
}
::placeholder {
  color: red;
  opacity: 0.5; /* Firefox */
}
input:focus::-webkit-input-placeholder {
    color: black;
	opacity: 0.5;
}
textarea:focus::-webkit-input-placeholder {
    color: black;
	opacity: 0.3;
}


input:hover::-webkit-input-placeholder {
     color: black;
	opacity: 0.5;
}
textarea:hover::-webkit-input-placeholder {
     color: black;
	opacity: 0.5;
}

/* Hoverable Sidenav Buttons*/
#mySidenav a {
  position: fixed;
  right: -170px;
  transition: 0.3s;
  padding: 15px;
  width: 220px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 5px;

}

#mySidenav a:hover {
  right: 0;
}

#darkmode {
  top: 600px;
  background-color: #555
}
.header1 {
  width: 100%;
  height: 50px;
  position: sticky;
  top: 0px;
}
.header1-1{
  top: 47px;
}
marquee{
  background-color: coral;
}

#loading {
	overflow: hidden;
    background: url('icon2.gif') no-repeat center center;
    position: fixed;
	background-size: cover;
    height: 100%;
    width: 100%;
    z-index: 9999999;
}


.tooltip {

}

.tooltip .tooltiptext {
  visibility: hidden;
  width: auto;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}




@media only screen and (max-width: 650px) {

.column 
{
  float: left;
  width: 55.33%;
  padding: 20px;
  height: 200px;
}

/* body
{
background-color: green;
} */

}

/*Mobile nu for u and me*/
@media(max-width: 1000px){



.column 
{
  float: center;
  width: 45.44%;
  padding: 150px;
  height: 200px;
}
/* body
{
background-color: green;
} */


}


@media(max-width: 770px){

.column 
{
  float: center;
  width: 100%;
  padding: 100px;
  height: 200px;
}

/ *body
{
background-color: blue;
} */



}



</style>

</head>

<body>


<div id="loading"></div>

	<header class="zoom">
		<div class="title">
			<h2 style="color:black">E-NEWSPAPERS</h2>
			<div class="header" id="myHeader" style="z-index: 2">
			<?php include 'header.php';?>
			</div>
		</div>
	</header>
	
<!-- <a onclick="myFunction4()"> <img src="darkmode.png" alt="Mode"  height="20" width="20"> </a> -->
	
			<div class="center">
		
					<?php
					session_start();
					if(isset($_SESSION['name']))
					{
					$user=$_SESSION['name']; ?>			
					<b><br>
					<header class="header1 header1-1" >
					<marquee style="z-index: 1" >
					<h3 style="color:#143D59">
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
					</header>
					</b>
					<?php
					} else {}
					?>
						
							<div class="row">
									
								<div class="column">
									<a href="Paper.php?paper=Divya Bhaskar">
									<img src="divyabhasker-logo.jpg" alt="divya bhasker"  height="100" width="255">	
									</a>
								</div>
								
								<div class="column">
								<br>
									<a href="Paper.php?paper=Aaj Kaal">
									<img src="aajkaal-logo.jpg" alt="aajkaal"  height="60" width="230">
									</a>
								</div>
								
								<div class="column">
								<br>
									<a href="Paper.php?paper=Gujarat Mitra">
									<img src="gmlogo.jpg" alt="Gujarat Mitra"  height="70" width="240">
									</a>
								</div>
						
								<div class="column">
								<br>
									<a href="Paper.php?paper=Gujarat Samachar">
									<img src="GujaratSamachar.jpg" alt="divya bhasker"  height="70" width="250">	
									</a>
								</div>
								
								<div class="column">
									<a href="Paper.php?paper=Mubai Samachar">
									<img src="Mumbaisamacharlogo.png" alt="Mumbai Samachar"  height="75" width="245">
									</a>
								</div>
								
								<div class="column">
									<a href="Paper.php?paper=Sanj Samachar">
									<img src="sanjsamachar-logo.jpg" alt="Sanj Sandesh"  height="65" width="255">
									</a>
								</div>
								
								<div class="column">
									<a href="Paper.php?paper=Sandesh">
									<img src="sandesh-logo2.jpg" alt="sandesh"  height="100" width="180">	
									</a>
								</div>
								
								<div class="column">
									<a href="Paper.php?paper=Nobat">
									<img src="nobat-logo2.jpg" alt="Nobat"  height="100" width="225">
									</a>
								</div>

							</div>
				</div>		

				<div class="main" id="feedback">
				<br>
				<br>
				<hr>
				<br>
				<div class ="container">

					<table align="center"> 
					
						<tr>
							<th><h1>FeedBack Form</h1></th>
							
						
						</tr> 

					
						<tr>
							
							<td>
								<form action="form.php" method="POST">
								<b>Name:</b><br>
								
								<input type="text" placeholder="Enter your name" id="name" name="name" required><br><br>
								
								<b>Email:</b><br>
								
								<input type="email" placeholder="Enter your email" id="email" name="email" required><br><br>
								
								<b>FeedBack:</b><br>
							 
									
									<textarea id="feedback" name="feedback" placeholder="Enter your Requrnment/Problem here.." style="height:100px" cols="42" required></textarea><br>
									
								<br>
								<div class="redbtn"><button style="

">Send</button></div>
								
								</form>
							</td>

						
						</tr>
						
					</table>

				</div>

					<center>



						<a href="#top" accesskey="t">
						<br>
						<div class="tooltip">
						<button class="button" >Back To Top</button>
						<span class="tooltiptext">Alt+T</span>
						</div>
							<!--<button class="block">PRESS TO FLY</button> -->
						</a>
						
					</center>
					

		
	

<footer>
					
<center>
<div class="footercolor">
<hr>
						<h1 style="color:black">Follow Us</h1>
						
						<div class="img">

							<a href="https://www.facebook.com/e.newspaper.9" target="_blank">
								<img src="facebook.jpg" height="50px" width="50px">
							</a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="https://twitter.com/ENEWSPAPER599" target="_blank">
								<img src="twitter1.jpg" height="50px" width="50px">
							</a> 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="mailto:enewspaper599@gmail.com" target="_blank">
								<img src="mail1.png" height="50px" width="50px">
							</a> 
							

						</div>
						<br>
						
</div>			
</center>
</footer>

</div>


<div id="mySidenav" class="sidenav">
  <a id="darkmode" onclick="myFunction4()"> <img src="iconz.jpg" alt="Mode"  height="22" width="22"> &nbsp; E-NEWSPAPERS </a>
  
</div>



<?php
error_reporting(0);

if(isset($_SESSION['name']))
{
$user=$_SESSION['name']; ?>
<?php
}
 else { ?>	
 
 <!-- POPUP we use popup.css and popup.js -->
   <div class="login-popup">
  	 <div class="box">
  	 	 <div class="form">
		 <center>
  	 	 	<div class="close" style="color:white"> &times;</div>
		</center>
			<br><br><br><br><br>
			
				<h1 style="text-align:center; color:white">Login for more amazing experiences without any subscription <br> <a href="login.php" style="font-size: 3vw">LOGIN</a><br>  </h1> <br>
				
  	 	 </div>
  	 </div>
  </div>
	
<?php } ?>



<script src="popup.js"></script>


    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	      <script id="rendered-js" >
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  $(".zoom").css({
    backgroundSize: 100 + scroll / 5 + "%",
    top: -(scroll / 10) + "%"

    //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
    //"-webkit-filter": "blur(" + (scroll/200) + "px)",
    //filter: "blur(" + (scroll/200) + "px)"
  });
});
//# sourceURL=pen.js
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



  <script>
function myFunction4() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<script>
function hideLoader() {
    $('#loading').hide();
}



// Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
    setTimeout(function () {
        hideLoader();
    }, 5);
</script>


</body>
</html>