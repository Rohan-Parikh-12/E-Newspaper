<html>
<head>
	<title>Upload</title>

<style>


body
{
	
	background-image: url('pexels-splitshire-1587.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

ul 
{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
   // position: fixed;
}

li 
{
  float: left;
}

li a 
{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover 
{
  background-color: #111;
}

</style>

<script>

    function startTime() 
	{
                var today = new Date();
                var hr = today.getHours();
                var min = today.getMinutes();
                var sec = today.getSeconds();
                ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
                hr = (hr == 0) ? 12 : hr;
                hr = (hr > 12) ? hr - 12 : hr;
                //Add a zero in front of numbers<10
                hr = checkTime(hr);
                min = checkTime(min);
                sec = checkTime(sec);
                document.getElementById("time").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

                var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
                var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                var curWeekDay = days[today.getDay()];
                var curDay = today.getDate();
                var curMonth = months[today.getMonth()];
                var curYear = today.getFullYear();
                var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
                document.getElementById("date").innerHTML = date;

                var time = setTimeout(function()
				{ 
					startTime() 
				}, 500);
    }
	function checkTime(i)
	{
                if (i < 10) 
				{
                    i = "0" + i;
                }
                return i;
     }
</script>

</head>

<body>

<ul>

	
	
	
	
	<li><a href="d_index.php">Home</a></li>
	<li><a href="news.html"><font color="red">News</font></a></li>
	<li><a href="Contactus.html">Contact</a></li>
	<li><a href="aboutus.html">About Us</a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	<li><a></a></li>
	
	<li> <body onload="startTime()">
	
			<a class="date-time"> 
			
				<span   id="date"></span>&nbsp;&nbsp;
				<span id="time"></span>
				
			</a> 
	</li>
	
	
	</body>
	
</ul>

<center><h1>મુખ્યસમાચાર</h1></center>
<br>
<table class="table table-bordered table-stripted">
<thead>
<th> Place </th>
<th> Description </th>
<th> Image </th>
<th> Date </th>
</thead>

<tbody>

<?php
error_reporting(0);
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'displayupload');

if(isset($_POST['submit']))
{
	$place= $_POST['place'];
	$text= $_POST['text'];
	$des= $_POST['des'];
	$files= $_FILES['file'];
	$date= $_POST['date'];
	$d_id= $_SESSION['did'];
	
	#print_r($place);
	#echo "<br>";
	#print_r($text);
	#echo "<br>";
	#print_r($files);
	#echo "<br>";
	#print_r($date);
	#print_r($filename);
	
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];
	
	#321281.jpg 
	
	$fileext=explode('.',$filename);
	$filecheck= strtolower(end($fileext));
	
	$fileextstored = array('png','jpg','jpeg');
	if(in_array($filecheck,$fileextstored))
	{
		$destinationfile='upload/'.$filename;
		move_uploaded_file($filetmp,$destinationfile);
		
		echo $q = "INSERT INTO `imgupload`(`place`, `text`, `description`, `image`, `date`,`d_id`) VALUES ('$place','$text','$des','$destinationfile','$date','$d_id')";
		
		$query=mysqli_query($con,$q) or die ("error");
		
		$displayquery="select * from imgupload ORDER BY DESC;";
		$querydisplay=mysqli_query($con,$displayquery);
		
		#$row=mysqli_num_rows($querydisplay);
		#ORDER BY desn
		
		while ($result = mysqli_fetch_array($querydisplay)) {
		
		?>
		
		<tr>
			<td> <?php echo $result['place']; ?></td>
			<td> <?php echo $result['text']; ?></td>
			<td> <?php echo $result['des']; ?></td>
			<td> <img src=" <?php echo $result['image']; ?>" height="100px" width="150px"></td>
			<td> <?php echo $result['date']; ?></td>
			
		</tr>
		
		<?php
		}
		header("Location: newsblogs.php");
	}
	
}
?>

</tbody>
</table>
</body>
</html>