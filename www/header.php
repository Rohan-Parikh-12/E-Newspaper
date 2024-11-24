<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" href="popup.css" type="text/css">
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
<style>

html 
{
  scroll-behavior: smooth;
}

/*
.fix
{
	
	 position: fixed;
    left: 0;
    top: 0;
}
*/

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

/*

*{
  box-sizing: border-box;
  
} */



#feedback
{
	//this is for move to feadback option
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





</style>

<script>
function myFunction4() {
   var element = document.body;
   element.classList.toggle("dark-mode");
  saveInCookies: true; // default: true,
  autoMatchOsTheme: true;
}
</script>

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
<div class="fix">
<ul>


	<li><a href="index.php" style="color:white; text-decoration: none;" accesskey="1">Home</font></a></li>
	<li><a href="upload.php" style="color:white; text-decoration: none;" accesskey="2"> News</a></li>
	
	<?php
error_reporting(0);

if(isset($_SESSION['name']))
{
$user=$_SESSION['name']; ?>
<li><a href="video.php"style="color:white; text-decoration: none;" accesskey="3" > <!--news.html target="_blank" -->Live News</a></li>


<?php
} else { ?>
	<a type="hidden" accesskey="3" onclick="myFunction7()"> </a>
	<?php
}
	?>

	
	<li><a href="Contactus.php" style="color:white; text-decoration: none;"accesskey="4">Contact</a></li>
	<li><a href="aboutus.php" style="color:white; text-decoration: none;" accesskey="5">About Us</a></li>
	<li><a href="share.php" style="color:white; text-decoration: none;" accesskey="6"  >Share</a></li>
	<li><a onclick="themeToggle()" > <img  id="theme" src="darkmode1.png" alt="Mode"  height="20" width="20" style="opacity: 1; border:none;" accesskey="7"> </a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>

	<?php
error_reporting(0);

if(isset($_SESSION['name']))
{
$user=$_SESSION['name']; ?>
<?php
} else { ?>	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
<?php	}
	?>
	
	<li> <body onload="startTime()">
	
			<a class="date-time" style="color:white; text-decoration: none;"> 
			
				<span   id="date"></span>&nbsp;&nbsp;
				<span id="time"></span>
				
			</a> 
	</li>
	<li><a></a></li>
	<li><a></a></li>

	

  


	
	<li><div class="tooltip">
	<a href="index.php#feedback" accesskey="p" style="color:white; text-decoration: none;">Feedback</a>
	
	<span class="tooltiptext">Alt+P</span></div></li>
	
	
		<?php
error_reporting(0);

if(isset($_SESSION['name']))
{
$user=$_SESSION['name']; ?>
<?php
} else { ?>	<li><a></a></li>
	<li><a></a></li>
	
<?php	}
	?>
	
	

	<?php


if(isset($_SESSION['name']))
{
	
$user=$_SESSION['name']; ?>
	

	
	<li><a href="account.php" style="color:#99b898; text-decoration: none; " accesskey="8"><?php echo $user; ?> </a></li>
	
	<li><a href="logout.php" style="color:yellow; text-decoration: none;">Logout</a></li>
	<li><a href="u_counter.php"></a></li>
	<li><a></a></li>
	<?php 
}else
{ ?>

	<a type="hidden" accesskey="8" onclick="myFunction7()"> </a>
	
	<li><a></a></li>

	<li><a href="login.php" style="color:yellow; text-decoration: none;">Login</a></li>
<?php 
}
?>
	<li style="float:right"><a href="info.php" ><img src="info2.png" height="20" width="20" style="opacity: 1; border:none;"></a></li>
</body>
	
</ul>

 
</div>





<script>
function myFunction7() {
  alert("You need to login: Go to info. page for more details");
}
</script>

<script>

// On page load set the theme.
(function() {
  let onpageLoad = localStorage.getItem("theme") || "";
  let element = document.body;
  element.classList.add(onpageLoad);
  document.getElementById("theme").textContent =
    localStorage.getItem("theme") || "light";
})();

function themeToggle() {
  let element = document.body;
  element.classList.toggle("dark-mode");

  let theme = localStorage.getItem("theme");
  if (theme && theme === "dark-mode") {
    localStorage.setItem("theme", "");
  } else {
    localStorage.setItem("theme", "dark-mode");
  }

  document.getElementById("theme").textContent = localStorage.getItem("theme");
}


</script>




</body>
</html>