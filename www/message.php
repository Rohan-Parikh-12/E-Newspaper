<?php
	
	error_reporting(0);
	$server ="localhost";
	$username ="root";
	$password ="";
	$con =mysqli_connect($server,$username,$password);
	if(!$con)
	{
		die ("connected failed".mysqli_connect_error);
	}
	else
	{
	// echo "connected";
	}
		if(isset($_POST['name'])==true)
		{
			$name = $_POST['name'];    
			$feedback = $_POST['feedback'];
			echo $name;
			echo "<br>";
			echo $feedback;
			$sql="INSERT INTO `feedback` . `feedback`(`Name`, `Feedback`) VALUES ('$name','$feedback');";
			if($con->query($sql)==true)
			{
				$insert=true;
			//  echo "sucefully connect";
			}
			else
			{
				echo "error: $sql <br> $con->error";
				
			}
		}
		echo "<br><br>Sucefully Connect";
		
	
?>