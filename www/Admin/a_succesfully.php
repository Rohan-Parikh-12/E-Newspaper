<?php
session_start();
if(isset($_SESSION['name']))
{
$user=$_SESSION['name'];
?>
<!-- For Backgroung Image -->
<!-- for 3 parts of image -->
<!-- For center Image -->
<!-- For orizontal Navigation Bar -->

<html>
<head>
<title> E-papers </title>
<style>


body
{
	
	background-image: url('pexels-splitshire-1587.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	cursor: cell;
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

/* Clearfix (clear floats) */
.row::after 
{
  content: "";
  clear: both;
  display: table;
}


.center
{
	text-align: center; 
}



ul 
{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
   // position: fixed;
}

li 
{
  float: left;
}

li a 
{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover 
{
  background-color: #111;
}


* {
  box-sizing: border-box;
  
}
.zoom 
{
  padding: 50px;

  transition: transform .2s;
  width: 100px;
  height: 100px;
  margin: 0 auto;
  
}

.zoom:hover 
{
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}


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

</head>
</style>


<script>

    function startTime() 
	{
                var today = new Date();
                var hr = today.getHours();
                var min = today.getMinutes();
                var sec = today.getSeconds();
                ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
                hr = (hr == 0) ? 12 : hr;
                hr = (hr > 12) ? hr - 12 : hr;
                //Add a zero in front of numbers<10
                hr = checkTime(hr);
                min = checkTime(min);
                sec = checkTime(sec);
                document.getElementById("time").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

                var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
                var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                var curWeekDay = days[today.getDay()];
                var curDay = today.getDate();
                var curMonth = months[today.getMonth()];
                var curYear = today.getFullYear();
                var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
                document.getElementById("date").innerHTML = date;

                var time = setTimeout(function()
				{ 
					startTime() 
				}, 500);
    }
	function checkTime(i)
	{
                if (i < 10) 
				{
                    i = "0" + i;
                }
                return i;
     }
</script>

</head>

<body>

<ul>


	<li><a class="active" href="index.html"><font color="red">Home</font></a></li>
	<li><a href="upload.php"> <!--news.html target="_blank" -->News</a></li>
	<li><a href="Contactus.html">Contact</a></li>
	<li><a href="aboutus.html">About Us</a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	
	<li> <body onload="startTime()">
	
			<a class="date-time"> 
			
				<span   id="date"></span>&nbsp;&nbsp;
				<span id="time"></span>
				
			</a> 
	</li>
	
	
	</body>
	
</ul>

	
	<div class="center">
		
		<div style="background-color:#333333">
	
			<p class="double" style="font-size:4vw" ><font color="white">E-NEWSPAPERS</font></p>
		
		</div>
	
		<div class="row">
				
			<div class="column">
				<a href="Divyabhashkar.html">
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
<hr>
<body>

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
				
				<input type="text" placeholder="abc" id="name" name="name"><br><br>
				
				<b>FeedBack:</b><br>
			 
					
					<textarea id="feedback" name="feedback" placeholder="Enter your Requrnment/Problem here.." style="height:100px"></textarea><br>
				<button class="button button1">Send</button> 
				
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

</body>
</html>
<?php
}
else
{
    echo "error";
}
?>