
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
	 
<br><br><br><br><br><br><br>
<form action="" method="POST" border="0" bgcolor="black" align="center"  cellspacing="25">
  <input type="text" name="cprice" placeholder='type modifying price'><br><br>
  <input type="submit" value="Submit">
  </form>

  <?php
error_reporting(0);
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

$name=$_GET['name'];
$price=$_GET['price'];
$l=$_POST['cprice'];

$query="UPDATE listofitems
SET name = '$name', price= '$l'
WHERE name='$name'";

$data=mysqli_query($conn,$query);
?>


<table border="0" bgcolor="black" align="center"  cellspacing="25">
<tr>

<th><font color="white">name</font></th>
<th><font color="white">price</th>
<th colspan="2" align="center"><font color="white"> operations</th>
</tr>


<?php

$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

$conn =  new mysqli($servername,$username,$password,$dbname);

error_reporting(0);
$query="select * from listofitems";
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
		<td>".$result['name']."</td>
		<td>".$result['price']."</td>
		<td><a href='updateprice.php? name=$result[name] & price=$result[price]'>update</td>
		</tr>
		";
	}
}
else
{
	echo "table has no records";
}
?>


<p id="button" colspan="2" align="center" ><a href='inserting_prices.html'>insert into table</a>
<p id="button" colspan="2" align="center" ><a href='pricedisplay.php'>exit edit mode</a>
<p id="button" colspan="2" align="center" ><a href='home.php'>home</a>
</body>
</html>
