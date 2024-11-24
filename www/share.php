<html>
<head>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
</head>
<style>

input
{
	width: 12.5%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 20px;
}

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

.buttonfix
{
	position: fixed;
}

</style>
<body>
<center>

<?php include 'header.php';?>

<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
<br><br><br><br>

<img src="qrcode_e-papers.c1.biz.png" alt="share" >
<br>
<br>

<input type="text" value="http://e-papers.c1.biz/" id="http://e-papers.c1.biz/"> <br>

<button onclick="myFunction()">Copy Link</button>

<script>
function myFunction() {
  var copyText = document.getElementById("http://e-papers.c1.biz/");
  copyText.select();

  document.execCommand("copy");
  alert("Copied the link: " + copyText.id);
}

</script>

<script>
function goBack() 
{
  window.history.back();
}
</script>

</center>
</body>
</html>