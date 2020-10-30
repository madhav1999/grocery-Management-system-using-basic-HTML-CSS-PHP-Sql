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
align:center;
text-align:top;
width:600px;
color:white;
border-radius:20px ;
border:green;
height:10px;


}
#button
{
background-color:white;
color:white;
height:32px;
width:150px;
border-radius:25px;
}

#div1
{
	
	height:350px;
	width:600px;
	overflow:auto;
	overflow-x:hidden;
	position:relative;
	left:380px;

}


</style>
</head>	
<body>

<div id='divheading'>	
<table border="0" bgcolor="black" align="center"  cellspacing="25">
<tr>
<th><font color="white">name</font></th>
<th><font color="white">price</th>
<th colspan="2" align="center"><font color="white"> operations</th>
<p id="button" colspan="2" align="center" ><a href='inserting_prices.html'>insert into table</p>
<p id="button" colspan="2" align="center" ><a href='addinglist.php'>create a list</p>
<p id="button" colspan="2" align="center" ><a href='home.php'>home</p>
</tr>
</table>
</div>


<div id='div1'>
<table  border="0" bgcolor="black" align="center"  cellspacing="25">


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
		<td><a href='updateprice.php?name=$result[name] & price=$result[price]'>update</td>
		<td><a href='deleteprice.php?name=$result[name] & price=$result[price]'>delete</td>
		</tr>
		";
	}
}
else
{
	echo "table has no records";
}
?>
</div>
</table>
</body>
</html>
