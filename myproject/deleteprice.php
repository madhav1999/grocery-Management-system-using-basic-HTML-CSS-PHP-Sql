<html>
	<head></head>
	<body>
		<style>
body
{
background:linear-gradient(red,blue);
}
#button
{
background-color:white;
color:white;
height:32px;
width:85px;
border-radius:25px;
}

</style>
		<p id="button" colspan="2" align="center"><a href='pricedisplay.php'>back</p>
<?php
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

$name=$_GET['name'];
$price=$_GET['price'];
echo $name;
echo $price;
$query="Delete  from listofitems where name='$name' and price='$price'";


$data=mysqli_query($conn,$query);

if($data)
{
	echo "<font color='green'><h1>record deleted succesfully</h1>";
	header('Location:pricedisplay.php');

}
else
{
	echo "<font color='red'>record not deleted";
}

?>
</body>
</html>
