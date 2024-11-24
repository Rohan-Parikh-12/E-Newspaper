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
			$email = $_POST['email'];    
			$feedback = $_POST['feedback'];
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $feedback;
			echo "<br>";
			echo $approve=0;
			$sql="INSERT INTO `feedback` . `feedback`(`Name`,`email`, `Feedback`,`approve`) VALUES ('$name','$email','$feedback','$approve');";
			if($con->query($sql)==true)
			{
				$insert=true;
			//  echo "sucefully connect";
			header("Location:d_index.php");
			}
			else
			{
				echo "error: $sql <br> $con->error";
				
			}
		}
		echo "<br><br>Sucefully Connect";
		
		
	
?>
<html>
<button onclick="goBack()">Back</button>

<script>
function goBack() 
{
  window.history.back();
}
</script>
</html>