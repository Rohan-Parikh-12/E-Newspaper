<?php
session_start();
if(isset($_SESSION['dname']))
{
$user=$_SESSION['dname'];
?>
<!-- For Backgroung Image -->
<!-- for 3 parts of image -->
<!-- For center Image -->
<!-- For orizontal Navigation Bar -->

<html>
<head>
<title> E-papers </title>
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
<style>

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
  cursor: cell;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #303030; 
  border-radius: 10px;
  cursor: cell;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: gray;
  cursor: cell;
}

/* textarea */
textarea
{
	resize: vertical;
}

</head>
</style>

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
	</style>

</head>

<body>

<?php include 'd_header.php';?>
	
	
	<br><br><br><br>
	<center>
			<p class="double" style="font-size:4vw" ><font >Welcome, <?php
session_start();
if(isset($_SESSION['dname']))
{
echo $user=$_SESSION['dname']; }else{}
?> </font></p>
			<br><br>
			<p class="double" style="font-size:5vw; width:70%"  ><font>"A good programmer is someone who always looks both ways before crossing a one-way street."</font></p>
			
	</center>	


</body>
</html>
<?php
}
else
{
    echo "error";
}
?>