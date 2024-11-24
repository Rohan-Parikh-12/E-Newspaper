<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="nav.css"/>
</head>
<style>


body{
    overflow-x: hidden;
}
nav{
    height: auto;
	width:100%;
    background-color: #131418;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    position: fixed;
    z-index: 10;
}


/*Styling Links*/
.nav-links{
    display: flex;
    list-style: none; 
    width: 88vw;
    padding: 0 0.7vw;
    justify-content: space-evenly;
    align-items: center;
    text-transform: uppercase;
}

.nav-links li {
    position: relative;
}




/*Styling Hamburger Icon*/
.hamburger div{
    width: 30px;
    height:3px;
    color:black;
    background:black;
    margin: 5px;
    transition: all 0.3s ease;
}
.hamburger{
    display: none;
	background-color:red;

}

/*Stying for small screens*/
@media screen and (max-width: 1000px){
    nav{
        position: fixed;
        z-index: 3;
    }
    .hamburger{
        display:block;
        position: absolute;
        cursor: pointer;
        right: -0.3%;
		top:10;
        transform: translate(-5%, -50%);
        z-index: 2;
        transition: all 0.7s ease;
    }
    .nav-links{
        position: fixed;
        background: #131418;
        height: 100vh;
        width: 100%;
        flex-direction: column;
        clip-path: circle(50px at 90% -20%);
        -webkit-clip-path: circle(50px at 90% -10%);
        transition: all 1s ease-out;
        pointer-events: none;
    }
    .nav-links.open{
        clip-path: circle(1000px at 90% -10%);
        -webkit-clip-path: circle(2000px at 90% -10%);
        pointer-events: all;
    }
    .nav-links li{
        opacity: 0;
    }
    .nav-links li:nth-child(1){
        transition: all 0.5s ease 0.2s;
    }
    .nav-links li:nth-child(2){
        transition: all 0.5s ease 0.4s;
    }
    .nav-links li:nth-child(3){
        transition: all 0.5s ease 0.6s;
    }
    .nav-links li:nth-child(4){
        transition: all 0.5s ease 0.7s;
    }
    .nav-links li:nth-child(5){
        transition: all 0.5s ease 0.8s;
    }
    .nav-links li:nth-child(6){
        transition: all 0.5s ease 0.9s;
        margin: 0;
    }
    .nav-links li:nth-child(7){
        transition: all 0.5s ease 1s;
        margin: 0;
    }
    li.fade{
        opacity: 1;
    }
}
/*Animating Hamburger Icon on Click*/
.toggle .line1{
    transform: rotate(-45deg) translate(-5px,6px);
}
.toggle .line2{
    transition: all 0.7s ease;
    width:0;
}
.toggle .line3{
    transform: rotate(45deg) translate(-5px,-6px);
}

</style>
<body style="float:center">
    <nav>

        <div class="hamburger">
		<br><br><br>
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
			<br>
        </div>
        <ul class="nav-links">


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
	
</ul>
    </nav>
    <script src="nav.js"></script>
	
	<script>
	const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});
	</script>
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
</body>
</html>

