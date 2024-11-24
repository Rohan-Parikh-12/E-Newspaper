<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if(empty($name) || empty ($email) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("rp12062003@gmail.com", "e-newspapers", $message, "From: $name <$email>");
	echo "<script type= 'text/javascript'>alert('your message sent successfully'); window.history.log(-1); </script>;
}

	error_reporting(0);
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='rp12062003@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
		
		echo $name;

		if(mail($to, $subject, $message, $headers)){
			echo "Sent Successfully! Thank you"." ".$name.", We will contact you shortly!";
		}
		else{
			echo "Something went wrong!";
		}
	} 
?> 