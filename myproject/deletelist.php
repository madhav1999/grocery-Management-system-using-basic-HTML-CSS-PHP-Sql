<?php
error_reporting(0);
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

$query="DELETE FROM `addinglist`";

$data=mysqli_query($conn,$query);

if($data)
{
	echo "<font color='green'><h1>record deleted succesfully</h1>";
	header('Location:addinglist.php');

}
else
{
	echo "<font color='red'>record not deleted";
}

?>
