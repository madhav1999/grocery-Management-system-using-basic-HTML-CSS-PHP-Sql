<?php


$name=filter_input(INPUT_POST,'name');
$price=filter_input(INPUT_POST,'price');

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
	$sql = "INSERT INTO listofitems(name,price)
	values ('$name','$price')";
	if($conn->query($sql))
	{
		echo "<h1  id='hai'>new record inserted</h1>";
		header('Location:inserting_prices.html');
	}
	else
	{
		echo "error".$sql."<br>".$conn->error;
	}
	$conn->close();
}
echo "<p> <a href='pricedisplay.php'> see the table of records </p>"
?>


