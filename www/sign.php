<html>
<head>
	<link rel="stylesheet" href="style.css">
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
	<title>Login Form</title>

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

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

.buttonfix
{
	position: fixed;
	top:54px;
}

</style>
</head>

<body>

<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
<div class="header" id="myHeader" style="z-index: 2">
<?php include 'header.php';?>
</div>

<div class="form-box">
	<h2>SIGN UP</h2>
	<form action="code.php" method="POST">
		<div class="input-group">
			<label>UserName</label>
			<input type="text" name = "name" id = "name" placeholder = "Enter your name" maxlength="24" size="24"  required spellcheck="false">
		</div>
		City :<select name="city" style="text-align: center" required>
				<option value="" disabled selected>Select your city</option>
				<option value="Ahmedabad">Ahmedabad</option>
				<option value="Vadodara">Vadodara</option>
				<option value="Surat">Surat</option>
				<option value="Jamnagar">Jamnagar</option>
				<option value="Rajkot">Rajkot</option>
		
			</select><br>
		<div class="input-group">
			<label>Phone</label>
			<input type="text" name = "phone" id = "phone" placeholder = "Enter your phone number" pattern="[6-9]{1}[0-9]{9}" required spellcheck="false">
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="text" name = "email" id = "email" placeholder = "Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required spellcheck="false">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name = "password" id = "password" placeholder = "Enter your password" pattern=".{6,}"   required title="6 characters minimum" required spellcheck="false">
		</div>
			
		<button type="submit">Submit &#10132; </button><br>
	</form>
		<center><h3><br><p id="p1">If you already have an account<br><a href="login.php">Login Here</a></p></h3></center>

</div>
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

  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <link href="https://rawgit.com/shaneapen/Image-Preview-for-Links/master/image_preview_for_links.css" rel="stylesheet"> 
  <!-- MiniPreview stuff here -->
  <link href="./jquery.minipreview.css" rel="stylesheet">
  <script src="./jquery.minipreview.js"></script>
  <script type="text/javascript">
    $(function() {
                $('#p1 a').miniPreview({ prefetch: 'pageload' });
                $('#p2 a').miniPreview({ prefetch: 'parenthover' });
                $('#p3 a').miniPreview({ prefetch: 'none' });
            });
  </script> <script src="https://rawgit.com/shaneapen/Image-Preview-for-Links/master/image_preview_for_links.js"></script>
  
  
  <script>
function goBack() 
{
  window.history.back();
}
</script>
  
</body>
</html>
