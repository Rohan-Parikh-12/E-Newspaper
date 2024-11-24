<html>
<head>
<title> E-papers </title>

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


button{
	padding: 10px 20px;
	border: none;
	background: #ff1100;
	color: #fff;
	font-size: 14px;
	cursor: pointer;
	border-radius: 30px;
}

.container
{
	max-width:1000px;
}

table, th, td
{
	width:30%;
	table-layout:fixed;
	text-align:center;
	font-size:15px;
	border-collapse:collapse;
	border: 3px solid white;
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

.buttonfix
{
	position: fixed;
}




</style>

<style>
	body
	{
	cursor: cell;
	
	}
	</style>

</head>



<body>
<div class="fix">
<?php include 'header.php';?>
</div>

<div class="buttonfix" style="margin-top:7"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
	
</body>
	
<center>
<div class ="container">

	<table align="center">
	
		<tr>
			<br><br><br><br><br>
			<th><h1>About Us</h1></th>
		
		</tr> 

	
		<tr>
			
			

			<td>
			
				<h3>
					
					<!--
					Member 1: Meet Barad<br>
					Enrolment No. 186250307503<br>
					<hr><br>
					Member 2: Dhruv Raval<br>
					Enrolment No. 186250307057<br>
					<hr><br>
					Member 3: Rohan Parikh<br>
					Enrolment No. 186250307058
				-->
					<hr>
					<br>
					Rohan Parikh
					<br>
					211260131503
					<br>
					<hr>
					
			
				</h3>
			</td>
		</tr>
		
	</table>
</center>
</div>

<script>
function goBack() 
{
  window.history.back();
}
</script>



</body>
</html>