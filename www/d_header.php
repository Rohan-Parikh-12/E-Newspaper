<html>
<head>
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
<style>

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

<!--
* {
  box-sizing: border-box;
  
} -->
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

<ul  style=" position: fixed;
    left: 0;
    top: 0; width:100%">


	<li><a href="d_index.php">Home</font></a></li>
	<!-- <li><a href="upload.php"> News</a></li> -->
	<?php
error_reporting(0);
session_start();
if(isset($_SESSION['dphone']))
{
$user=$_SESSION['dphone']; ?>
 <!-- <li><a href="d_video.php" news.html target="_blank" Video</a></li> -->


<?php
} else {}
	?>

	
	<!-- <li><a href="d_contactus.php">Contact</a></li> -->
	
	<li><a href="d_aboutus.php">About Us</a></li>
	<li><a href="d_feedback.php">Feedback</a></li>
	<li><a href="pdfblog.php">PDFBlog</a></li>
	<li><a href="pdfaccess.php">PDFAccess</a></li>
	<li><a onclick="themeToggle()" > <img  id="theme" src="darkmode1.png" alt="Mode"  height="20" width="20" style="opacity: 1; border:none;" accesskey="7"> </a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>


	
	<li> <body onload="startTime()">
	
			<a class="date-time"> 
			
				<span   id="date"></span>&nbsp;&nbsp;
				<span id="time"></span>
				
			</a> 
	</li>

	
	<li><a></a></li>
	<?php
session_start();
if(isset($_SESSION['dphone']))
{
$user=$_SESSION['dname']; ?>
	



	<li><a href="newsblogs.php">NewsBlog</a></li>
	<li><a href="d_upload.php">News Access</a></li>
	
	
	<li><a href="d_account.php"><?php 
			session_start(); 
            $user1=$_SESSION['did'];
			
			$con =mysqli_connect("localhost","root","","developer") or die("connected failed".mysqli_connect_error);
            $sql ="SELECT * FROM `developer` WHERE id='{$user1}'";
            $result = mysqli_query($con,$sql) or die("error");
            if(mysqli_num_rows($result)>0 )
            {
				while($row=mysqli_fetch_assoc($result))
				{
                session_start();

                echo $row['name'];
            
				}
			}
			else{
				echo "error";
			}
	 ?> </a></li>
	 <li><a href="logout.php" style=color:yellow>Logout</a></li>

	<?php 
}else
{ ?>
		<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a href="LoginOption.php" style=color:yellow>Login</a></li>
<?php 
}
?>
	
</body>
	
</ul>


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