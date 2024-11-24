<html>
<head>
	<title>NewsBlog</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
</head>

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
	
select
{
	width: 100%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 5px;
}
td,th
{
    padding:10px;
	text-align:center;
} 
th
{
	position: sticky;
	top:0;
	  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px #888888;
  background-color:#d8c3a5;
 color:#e85a4f;
}

.left 
{ 
	position:fixed;
	width:40%; 
	
	
}
.right
{
	float:right;
	width:60%; 
}
div.myscroll 
{
  height: 400px;
  width: 800px;
  overflow-y: scroll;
  border-radius: 5px;
}
table
{
  //border-collapse: collapse; 
  //color:#66fcf1;
  color:#e98074;

  //border: 1px solid black;
  radius: 25px;
}
</style>
	
	
<body>

<?php include 'd_header.php';?>
<br><br>

<div class="left">
  <div class="form-box">
  
  <div class="container">
<h2>NewsBlog</h2>
<form action="updated.php" method="post" enctype="multipart/form-data">

<lable> Place </lable>
<input type="text" name="place" id="user">
<br><br>
<lable> Text </lable>
<input type="text" name="text" id="user">
<br><br>
<lable> Description </lable>
<input type="text" name="des" id="user">
<br><br>
<lable> Image </lable>
<input type="file" name="file" id="file">
<br><br>
<lable> Date </lable>
<input type="date" name="date" id="user">
<br><br>
<center>
<button name="submit" >Submit</button>
</center>

</div>
</div>
</div>
</form>

<div class="right">
<br><br><br><br><br><br><br>
<div class="myscroll">
<div id="div_refresh">


</div>
</div>
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("newsblog_load.php");
        setInterval(function() {
            $("#div_refresh").load("newsblog_load.php");
        }, 1000);
    });
 
</script>

</body>
</html>