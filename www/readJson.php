<html>
<head>
<style>

.container 
{
  position: relative;
  
}

.bottomleft {
 
  bottom: 2px;
  left:16%;
  width:68%;
  background-color:#F4B41A;

}

img { 
  opacity: 0.7;
  border: 1px solid black;

}
img:hover
{
	box-shadow: 0px 0px 15px black;
}

.column
{
  float: center;
  width: 22.33%;
  padding: 50px;
}

.column2
{
  float: left;
  width: 22.33%;
  padding: 50px;
}



/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;

}
.zindex
{
	z-index: 100;
}
</style>
</head>
</html>
<?php
session_start();
error_reporting(0);

$paper2=$_SESSION['paper2'];

$date=date("Y/m/d");

    $emps= json_decode($_POST['emps'],true);
    foreach($emps as $emps2)
    {
    $_SESSION['start']=$emps2[name];
    print_r($emps2[name]);
    
    }
    // echo "<br>".$_SESSION['start'];
	$city=$_SESSION['city'];
    $find=$_SESSION['start'];
    $con =mysqli_connect("localhost","root","","pdf") or die("connected failed".mysqli_connect_error) ;
	if(isset($_SESSION['name']))
	{
		$sql="SELECT * FROM pdf Where date='{$find}' AND paper='{$paper2}' AND city='{$city}'";
	}
	else
	{
		$sql="SELECT * FROM pdf Where date='{$find}' AND paper='{$paper2}'";
	}
    
    $result = mysqli_query($con,$sql) or die("error");
    if(mysqli_num_rows($result)>0 )
    {
       
echo"<div class='row'>";
        while($row=mysqli_fetch_assoc($result))
        {  ?>
	
  
 <?php if(isset($_SESSION['name'])) {echo"<div class='column' >";} else {echo"<div class='column2' >";} ?>
	<div class="container">
	
        <b><a href="<?php echo $row['pdf']; ?>">  <img src="<?php echo $_SESSION['paper2']."1.jpg"; ?>" alt="Divya Bhaskar"
		height="300" width="210"> <div class="bottomleft"> <?php echo $find; ?> &nbsp;&nbsp; <?php echo $row['city'];?></div>  </a></b>
		   
	</div>
	</div>

	   <?php
		}
		echo"</div>";
    }
    else
    {
         echo "<br><h3>ePaper Not Available </h3>";
    }
           
?>