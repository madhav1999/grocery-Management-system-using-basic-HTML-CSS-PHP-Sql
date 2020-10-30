<?php

$rn=filter_input(INPUT_POST,'rollno');
$fn=filter_input(INPUT_POST,'firstname');

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
	$sql = "INSERT INTO student(rollno,firstname)
	values ('$rn','$fn')";
	if($conn->query($sql))
	{
		echo "new record inserted";
	}
	else
	{
		echo "error".$sql."<br>".$conn->error;
	}
	$conn->close();
}

?>
