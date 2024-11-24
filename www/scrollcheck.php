<html>

<head>

  <meta charset="UTF-8">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sansita'>
  
<style>

html 
{
  scroll-behavior: smooth;
}


body
{
	margin: 0;
	background: #f5f5f5;
	cursor: cell;
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
	border-radius: 10px;
}
textarea:hover
{
	//color:white;
	//background-color: black;
	box-shadow: 0px 0px 5px #61C5FA;
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
	
	width: 50%;
	height: 20px;
	border-radius: 10px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
	
} 
input:hover
{
	caret-color: red;
	//background-color: black;
	box-shadow: 0px 0px 5px #61C5FA;
}
::placeholder
{
	//color: black;
}
input:hover::-webkit-input-placeholder {
    //color: white;
}

</style>

</head>

<body>

	<header class="zoom">
		<div class="title">
			<h2 style="color:black">E-NEWSPAPERS</h2>
			<div class="header" id="myHeader">

			<?php include 'header.php';?>
			</div>
		</div>
	</header>

	
			<div class="center">
		
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

				<div class="main" id="feedback">
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
								
								<input type="text" placeholder="abc" id="name" name="name" required><br><br>
								
								<b>Email:</b><br>
								
								<input type="email" placeholder="example@example.com" id="email" name="email" required><br><br>
								
								<b>FeedBack:</b><br>
							 
									
									<textarea id="feedback" name="feedback" placeholder="Enter your Requrnment/Problem here.." style="height:100px" cols="40" required></textarea><br>
									
								<br>
								<button style="
	padding: 10px 20px;
	border: none;
	background: #ff1100;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	border-radius: 30px;
	box-shadow: 0px 0px 5px #61C5FA;
">Send</button> 
								
								</form>
							</td>

						
						</tr>
						
					</table>

				</div>

					<center>



						<a href="#top">
						<br>
						<button class="button" >PRESS TO FLY</button>
						
							<!--<button class="block">PRESS TO FLY</button> -->
						</a>
						
					</center>
					

		
	

<footer>
					
<center>
<div class="footercolor">
<hr>
						<h3>Follow Us</h3>
						
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
						
</div>			
</center>
</footer>

</div>
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

  

</body>


</html>
 
