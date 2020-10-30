<?php
error_reporting(0);
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

$itname=$_POST['itname'];
$quant=$_POST['quant'];

$query="INSERT INTO addinglist(name,quantity) values('$itname','$quant')";

$data=mysqli_query($conn,$query);
header('Location:addinglist.php');

?>
