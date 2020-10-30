<html>
	<head><title>updation</title><head>
	<body>

  <form action="" method="POST">
  <input type="text" name="fname"><br><br>
  <input type="submit" value="Submit">
  </form>
  <?php
error_reporting(0);
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

$loginid=$_GET['loginid'];
$password=$_GET['password'];
$l=$_POST['fname'];

$query="UPDATE student
SET loginid = '$loginid', password= '$l'
WHERE loginid='$loginid'";

$data=mysqli_query($conn,$query);


?>
			<br><br><br><br><br><br><br><br><br><br>
<table border="0" bgcolor="brown" align="center"  cellspacing="25">
<tr>
<th><font color="white">loginid</font></th>
<th><font color="white">password</th>
<th colspan="2" align="center"><font color="white"> operations</th>
</tr>
		
		
		

<?php
error_reporting(0);
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

error_reporting(0);
$query="select * from student";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

//$result = mysqli_fetch_assoc($data);

//echo $result['rollno']." ".$result['firstname'];
if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['loginid']."</td>
		<td>".$result['password']."</td>
		<td><a href='update.php?loginid=$result[loginid] & password=$result[password] '>update</td>
		<td><a href='delete.php?loginid=$result[loginid] & password=$result[password] '>delete</td>
		</tr>
		";
	}
}
else
{
	echo "table has no records";
}
?>
</table>

<p id="button" colspan="2" align="center" ><a href='display1.php'>see the table contents</a>
</body>
</html>
