<?php
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$con =mysqli_connect($server,$username,$password,"admin");
if(!$con)
{
    die ("connected failed".mysqli_connect_error);
}
else
{
   // echo "connected";
}
?>
<?php
$name1=$_POST['name1'];
$pa2=$_POST['pa2'];
//echo $name1;
 //echo $pa2;
 $find="SELECT * FROM login WHERE id='{$name1}'";
 
//  $result=mysqli_query($con,$find)or die("error");
?>

<html>
<head>
	<link rel="stylesheet" href="style.css">

    <title>Admin Login</title>
</head>
<body a link="yellow" vlink="yellow">
    <!-- <img class="bg" src="baground.jpg" alt="error"> -->
  <div class="container">
      <h1>
      <br>
      </h1>
      <form action="sucessfully.php" method="POST">
        <input type="text" name="name1" id="name1" placeholder="id " required>
       <br> <input type="password" name="pa2" id="pa2" placeholder="Enter password"required>
        <br><button class="su">submit</button>
        <?php
        if(isset($_POST['name1']))
        {
error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="admin";
$con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
        $id= mysqli_real_escape_string($con,$_POST['name1']);
        $pa2=$_POST['pa2'];
         $sql ="SELECT `id`, `pass`  FROM `admin` WHERE id='{$id}'AND pass = '{$pa2}'";
        $result = mysqli_query($con,$sql) or die("error");
        if(mysqli_num_rows($result)>0 )
        {
           
            while($row=mysqli_fetch_assoc($result))
            {
                session_start();
                $_SESSION['id']=$row['id'];
                $_SESSION['pass']=$row['pass'];

            }
        }
        else{

            echo "<p>-:user name  or  pass are invalid:- </p>";
            
            }
        }
        ?>
		<!--<br> <a href="sign.php">create account</a> -->
      </form>
  </div>  
</body>
</html>

