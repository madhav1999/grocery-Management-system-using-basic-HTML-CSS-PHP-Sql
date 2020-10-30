<html>
<head>
<title>
	
</title>
<h1>prepare a grocery list</h1>
<style>
	#divl
{
color:white;
border-radius:20px;
position:absolute;
top:-80px;
left:0px;
}


#tablu
{
color:white;
border-radius:10px;
position:absolute;
top:200px;
left:800px;
}

#tabl
{
width:100px
color:white;
border-radius:10px;
position:absolute;
bottom:410px;
left:300px;
}

#hai
{
	background-color:white;
	width:340px;
	border-radius:25px;
	align:center;
}
#button
{
background-color:green;
color:white;
height:32px;
width:85px;
border-radius:25px;
align=right;
}
#separate
{
background-color:green;
color:white;
height:32px;
width:100px;
border-radius:25px;
position:relative;
top:-30px;
left:620px;
}
#separate1
{
background-color:green;
color:white;
height:32px;
width:150px;
border-radius:25px;
position:relative;
top:-30px;
left:600px;
}

body
{
background:linear-gradient(red,blue);
}
</style>

</head>

<body>
<br><br><br><br><br><br><br><br><br><br>


<form action="submittinglist.php" method="POST">
<table id='tablu' border="0" bgcolor="black" align="center"  cellspacing="20" id="tab1">

<tr>
<td><input type="text" placeholder="item name" name="itname" required></td>
</tr>

<tr>
<td><input type="number" placeholder="quantity(in grams)" name="quant"></td>
</tr>

<tr>
	<td colspan="2" align="center"><input type="submit" id="button" name="submit"></td>
	
</tr>


</table>
</form>

<p id="separate" align='center'><a href='showlist.php'><font color='white'>showlist</p><br>
<p id="separate1" align='center'><a href='pricedisplay.php'><font color='white'>edit grocery list</p>
<p id="separate1" align='center'><a href='home.php'><font color='white'>home</p>


<div id='div1'>
	<table id='tabl' border="0" bgcolor="blue" align="center"  cellspacing="20">
	<tr>
		<th><font color='white'><b>item name</b></th>
		<th><font color='white'><b>price</b></th>
	</tr>
</table>
</div>
</body>
</html>


<html>
	<head>
		<style>
#divmain
{
	
	height:400px;
	width:200px;
	overflow:auto;
	overflow-x:hidden;
	position:relative;
	bottom:220px;
	left:285px;

}
#tablemain
{
align:center;
text-align:center;
width:100px;
color:white;
border-radius:20px ;
border:green;
height:10px;
}
		</style>
	</head>
<body>	
<div id='divmain'>
<table id='tablemain' border="0" bgcolor="black" align="center"  cellspacing="20">

	<?php
$servername  =   "localhost";
$username  =  "id15254467_root";
$password  =  "Hellohello@123";
$dbname  = "id15254467_myfirst";

	$conn =  new mysqli($servername,$username,$password,$dbname);
	$query="select * from listofitems";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
	while($result = mysqli_fetch_assoc($data))
		{
			echo "
			<tr>
			<td>".$result['name']."</td>
			<td>".$result['price']."</td>
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
</div>
</body>
</html>

