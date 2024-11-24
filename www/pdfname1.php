<?php error_reporting(0); 

session_start();

    $server ="localhost";
    $username ="root";
    $password ="";
    $database="pdf";
    $con =mysqli_connect($server,$username,$password,$database) or die("connected failed".mysqli_connect_error);
    if(isset($_POST['open'])==true)
	{
    $paper = $_POST['paper']; 
	$city = $_POST['city'];	

    $date = $_POST['date'];
    $d_id = $_SESSION['did'];


                                $files= $_FILES['file'];
	
                                $filename=$files['name'];
                                $fileerror=$files['error'];
                                $filetmp=$files['tmp_name'];
                                
                                $fileext=explode('.',$filename);
                                $filecheck= strtolower(end($fileext));
                                 
                                $fileextstored = array('pdf');
                                if(in_array($filecheck,$fileextstored))
                                {
                                    
                                    date_default_timezone_set("Asia/Calcutta");
                                    $time2=date("d-m-Y");
                                    $time=date("h-i-A");
                                    $destinationfile='Bad Boys/'.$paper.$city.$time2.$filename;
                                    move_uploaded_file($filetmp,$destinationfile);
									
    $sql="INSERT INTO `pdf` . `pdf` (`paper`,`city`, `pdf`, `date`,`d_id`) VALUES ('$paper','$city', '$destinationfile', '$date','$d_id');";


      if($con->query($sql)==true)
     {

		  
        echo "sucefully connect";

	  header("Location:pdfblog.php"); 
	  
     }
    else
    {
        echo "error:  <br> $con->error";
    }
	
	}
	else
    {
        echo "error1";
    }
	}
	else
    {
        echo "error2";
    }

?>
<html>

<head>
	<title>PDFblog</title>
	<link rel="stylesheet" href="../NEW/style.css">
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
</style>

<body>
<?php //include 'd_header.php';?>
<br>


<?php

?>


</body>
</html>