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

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: gray;
  color: white;
}

div.myscroll 
{
  background-color: lightblue;
  height: 400px;
  width: 210px;
  overflow-y: scroll;
  border-radius: 5px;
}
div.myscroll1 
{
  background-color: lightblue;
  height: 415px;
  width: 520px;
  overflow-y: scroll;
  border-radius: 5px;
}

.left 
{ 
	position:fixed;
	width:30%; 
	
	
}
.right
{
	float:right;
	width:70%; 
}

.buttonfix
{
	position: fixed;
}
	
.vl 
{
  position: fixed;
  border-left: 2px solid black;
  margin-left:28%;
  height: 100%;
}

hr
{
	z-index: -10;
	width:20%;
}

</style>
	
</head>

</html>
<body>

//black line in page
<div class="vl"></div>

<div class="fix">
<?php include 'header.php';?>
</div>


<div class="buttonfix" style="margin-top:35"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>


<div id="div_refresh">

</div>


<center>

<br><br><br>

<div class="left">
	<div class="vertical-menu">
	<a href="#LiveScore">Sports</a>
	<a href="#C19">COVID 19 Updates</a>
	<a href="#abp">ABP Asmita</a>
	<a href="#News18">News 18 Gujarati</a>
	<a href="#tv9">TV 9</a>
	</div>


    <div class="myscroll" style="margin-top: 20px">
		
    <center>&nbsp;&nbsp;&nbsp; Recent News</center><a class="twitter-timeline"  href="https://twitter.com/ENEWSPAPER599?ref_src=twsrc%5Etfw">Tweets by ENEWSPAPER599</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
	
</div>

<br>
<div class="right">

<div class="main" id="LiveScore">
<br><br><br><h1>Sports</h1>
<div class="myscroll1">
<div id="score-frame"><a rel="nofollow" href="https://www.crictimes.org/cricket-scores">Live Cricket Scores</a></div><script type="text/javascript">var html = document.getElementById('score-frame');html.innerHTML = '<iframe src="https://cwidget.crictimes.org/?b=d9d9d9&sb=434343&c=cccccc&a=434343&bo=434343&dc=000000&db=ffffff" style="width:100%;min-height: 460px;" frameborder="0" scrolling="yes"></iframe>';</script>
</div>
</div>
<br>
<hr>



<div class="main" id="C19">
<br><br><br><h1>COVID 19 - STAY HOME STAY SAFE</h1>
<div class="myscroll1">
<iframe src="https://ourworldindata.org/explorers/coronavirus-data-explorer?zoomToSelection=true&time=40..latest&pickerSort=desc&pickerMetric=total_cases&hideControls=true&Metric=Confirmed+cases&Interval=7-day+rolling+average&Relative+to+Population=false&Align+outbreaks=false&country=~IND" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
</div>
</div>
<br>
<hr>


<div class="main" id="abp">
<br><br>
<br><h1>ABP Asmita</h1>
<embed width="520" height="415" controls  src="https://www.youtube.com/embed/y8exnOYSHs8" allowfullscreen> </embed><br>
</div>
<br>
<hr>

<div class="main" id="News18">
<br><br>
<br><h1>News 18 Gujarati</h1>
<embed width="520" height="415" controls  src="https://www.youtube.com/embed/-th6X91GAgI" 'allowfullscreen'> </embed><br>
</div>
<br>
<hr>

<div class="main" id="tv9">
<br><br>
<br><h1>TV 9</h1>
<embed width="520" height="415" controls  src="https://www.youtube.com/embed/H2C9iUAVVEI" allowfullscreen> </embed><br>
</div>


</div>


<!-- <iframe width="420" height="315" src="https://www.youtube.com/v/A6XUVjK9W4o" frameborder="0" allowfullscreen></iframe> -->


</center>

<script>
function goBack() 
{
  window.history.back();
}
</script>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("live_market.php");
        setInterval(function() {
            $("#div_refresh").load("live_market.php");
        }, 8000);
    });
 
</script>


</body>