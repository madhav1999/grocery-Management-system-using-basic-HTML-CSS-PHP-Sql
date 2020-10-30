<html>
<head>
<title>Displaying records of the table</title>
<style>
body
{
background:linear-gradient(red,blue);
}
table
{
color:white;
border-radius:20px ;
border:green;
}
#button
{
background-color:white;
color:white;
height:32px;
width:150px;
border-radius:25px;
}
</style>
</head>	
<body>
	
	</table>  
<br><br><br><br><br><br><br>
<form action="" method="POST" border="0" bgcolor="black" align="center"  cellspacing="25">
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

</table>
		
	
	
	<br><br><br><br><br><br><br><br><br><br>
<table border="0" bgcolor="black" align="center"  cellspacing="25">
<tr>
<th><font color="white">loginid</font></th>
<th><font color="white">password</th>
<th colspan="2" align="center"><font color="white"> operations</th>
</tr>


<?php

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


<p id="button" colspan="2" align="center" ><a href='inserting_into_db.php'>insert into table</a>
</body>
</html>
