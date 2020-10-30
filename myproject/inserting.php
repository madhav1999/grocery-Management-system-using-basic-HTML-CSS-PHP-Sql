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
	$sql = "INSERT INTO student(loginid,password)
	values ('$lg','$pwd')";
	if($conn->query($sql))
	{
		echo "<h1  id='hai'>new record inserted</h1>";
	}
	else
	{
		echo "error".$sql."<br>".$conn->error;
	}
	$conn->close();
}
echo "<p> <a href='display1.php'> see the table of records </p>"
?>


