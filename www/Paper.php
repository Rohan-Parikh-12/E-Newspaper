<?php
error_reporting(0);
session_start();
?>

<html>
<head>
<link rel="icon" href="iconz.jpg" type="image/gif" sizes="22x22">
    <link rel="stylesheet" href="style.css">

    <title>Paper</title>
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

input,select
{
	width: 17%;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border: 1px solid #999;
	padding: 5px;
	background: transparent;

}


fieldset
{
	border:2px solid black;
	width: 17%;
	
}

.container {
  position: relative;
}

.bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 18px;
}

img { 

  opacity: 0.5;
}

.buttonfix
{
	position: fixed;
}

    ::-webkit-calendar-picker-indicator{
        margin-left: -15px;
    }


a:link {
  text-decoration: none;
}

a:visited 
{ 
  text-decoration: none;
}
a:hover 
{
  text-decoration: underline;
}

a:active
{	
  text-decoration: underline;
}
.zindex
{
	z-index: 100;
}


</style>
</head>
<body>
<center>
<div class="zindex">
<?php include 'header.php'; ?>
</div>
<br><br><br>
<div class="buttonfix"><button onclick="goBack()" style="float:left"><img src="backarrow.gif " style="opacity: 1; border:none; hover:none"> </button></div>
<?php
$_SESSION['paper2']=$paper=$_GET['paper'];
if(isset($_SESSION['name']))
{

}
else
{	

 
$city=$_SESSION['city'];
$date=date("Y/m/d");

	$con=mysqli_connect("localhost","root","","pdf") or  die("connected failed".mysqli_connect_error);

	$sql="SELECT * FROM pdf WHERE `city`='$city' AND `paper`='$paper' AND `date`='$date'";
	$result=mysqli_query($con,$sql) or die("error");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{ ?>
			<a href="<?php echo $row['pdf']; ?>" >     
			<img src="Paper.jpg" alt="Divya Bhaskar"  height="300" width="210"> <?php echo $date ?></a>  
		<?php }
	   
	}
}
?>



<div id="click">
<br><br><br>
    <input type="date" id="myinput" placeholder="searche" onkeyup="searchFun()" style="text-align: center">
            <p id="demo2"></p>
            <p id="demo3"></p>
     </div>
	 <br><br>
	 
<div id="div_refresh"></div>	
<br><hr><br><br>
<h3><a href="city.php">Click Here to see other City's ePaper</a></h3>
<br><br>

 


 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
		 $("#div_refresh").load("readJson.php");
        setInterval(function() {
            $("#div_refresh").load("readJson.php");
        }, 1000);
    });
 
</script>

<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" 
        rel="Stylesheet"
        type="text/css" />
  
      
  
    <script type="text/javascript" 
        src="http://code.jquery.com/ui/1.10.4/jquery-ui.js">
    </script>
	
	
    <script>
    $(document).ready(function(){
 $('#click').click(function(){
          filter2 =document.getElementById('myinput').value;
        //  document.getElementById("demo2").innerHTML = filter2;
         var emps=[];
        var emps1 ={};
        var emps2 ={};
        emps1.id=1;
        emps1.name=filter2;
        emps1.addr='jam';
        emps.push(emps1);
        console.log(emps);
        $.ajax({
            url:"readJson.php",method:"post",data:{ emps :JSON.stringify(emps) },success : function(res){console.log(res);}})
    });
  // set time out 5 sec
     setTimeout(function(){
        $('#click').trigger('click');
    }, 1000);
    setInterval(function(){ 
   $("#click").click();
},1000);
});
    </script>

<script>
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

document.getElementById('myinput').value=today;

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