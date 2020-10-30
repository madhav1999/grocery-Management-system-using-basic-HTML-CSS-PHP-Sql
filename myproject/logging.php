

<html>
<head>
<title>
</title>

<style>
table
{
color:white;
border-radius:20px;
}

#hai
{
	background-color:white;
	width:340px;
	border-radius:25px;
	align:center;
}
#button
{
background-color:green;
color:white;
height:32px;
width:85px;
border-radius:25px;
}
body
{
background:linear-gradient(red,blue);
}
</style>
</head>
<body>

<?php

$lg=filter_input(INPUT_POST,'lg');
$pwd=filter_input(INPUT_POST,'pwd');

$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

if(mysqli_connect_error())
{
	die('Connection error'.mysqli_connect_error());
}else
{
	
	$query = "select * from student where loginid='$lg' and password='$pwd' ";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		echo "<h1  id='hai' align='center'>   logged in successfully</h1>";
		echo "<h4><a href='pricedisplay.php'>see prices</h4>";
		
		//for redirecting;
		header('Location:home.php');	
	}
	else
	{
		echo "error".$sql."<br>".$conn->error;
	}
	$conn->close();
}
echo "<p id='button'> <a href='logging_into_db.html'> <font color='white'>go to loginpage</font> </p>"
?>
</body>
</html>



