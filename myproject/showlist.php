

<html>
	<head>
	<style>
		table
		{
			height:100px;
			width:400px;
			color:white;
			border-radius:20px;
			position:relative;
			top:100px;
			left:100px
		}
		body
		{
			background:linear-gradient(red,blue);
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
<table border="0" bgcolor="black" align="center"  cellspacing="25">
<tr>
<th><font color="white">item name</font></th>
<th><font color="white">quantity</th>
</tr>




<?php
error_reporting(0);
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";


$sum=0;


$conn =  new mysqli($servername,$username,$password,$dbname);
$query="select * from addinglist ";
$data=mysqli_query($conn,$query);


$total=mysqli_num_rows($data);


if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		$x=$result['name'];
		$query2 = "select * from listofitems where name='$x' ";
		$data2=mysqli_query($conn,$query2);
		$total2=mysqli_num_rows($data2);
		$result2=mysqli_fetch_assoc($data2);
		$rate=$result2['price'];
		$quant=$result['quantity'];
		$onegram=$rate/1000;
		$resprice=ceil($quant*$onegram);
		$sum=$sum+$resprice;

		echo "
		<tr>
		<td align='center'>".$x."</td>
		<td align='center'>".$quant."</td>
		</tr>
		";
		
		
	}
}
else
{
	echo "table has no records";
}
echo "
<tr>
<td id='button' align='center'><a href='deletelist.php'>delete complete list</td>
</tr>
";

echo "<b>
total sum:".$sum."
</b>"
?>
<p id='button' align='center'><a href='addinglist.php'>create list</p>
</body>
</html>



