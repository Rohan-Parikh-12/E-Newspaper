<html>


<link rel="stylesheet" href="style.css">
<body>
<?php include 'header.php';?>

<br><br>
<center>

  <button  onclick="login('User')">User</button>
  <button  onclick="login('Developer')">Developer</button>
  <button  onclick="login('Admin')">Admin</button>

</center>

<div id="User" class="login">


  <?php include 'login.php';?>
</div>

<div id="Developer" class="login" style="display:none">

  <?php include 'd_login.php';?>
</div>
<div id="Admin" class="login" style="display:none">


  <?php include 'Adminlogin.php';?>
</div>

<script>
function login(cityName) {
  var i;
  var x = document.getElementsByClassName("login");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

</body>
</html>
