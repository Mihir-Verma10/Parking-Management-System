<html>
<head>
<style>
body{
background-image:url("bg1.jpg");
background-position:center;
background-size:cover;
}
table{
	position:absolute;
	top:150;
	left:600;
	background-color:white;
}
</style>
</head>
<body>
<h1 style="position:absolute;top:20;left:700px;font-family:algerian;color:blue;width:340px"><u>here is the list of all vehicals </u></h1></body></html>
<button onclick="document.location='WorK.php'" style="background-color:yellow;width:150px">admin page</button>
<button onclick="document.location='vehical arrives.php'" style="background-color:yellow;width:150px">checkin page</button>
<button onclick="document.location='vehical released.php'" style="background-color:yellow;width:150px">checkout page</button>

<?php
include("conn.php");
$q1="select * from vehical;";
	$query1=mysqli_query($conn,$q1);
	echo"<center/><table border='1'>
	<tr>
	<th>owner_name</th>
	<th>vehical_name</th>
	<th>vehical_type</th>
	<th>vehical_no</th>
	<th>owners_mobile</th>
	<th>plot_no</th>
	</tr>";
	while($row=mysqli_fetch_array($query1))
{
	echo "<tr><td>".$row["owner_name"]."</td> <br/><td>";
	echo $row["vehical_name"]." </td><br/><td>";
    echo $row["vehical_type"]."</td><td>";
	echo $row["vehical_no"]." </td><br/><td>";
    echo $row["owners_mobile"]." </td><br/><td>";
    echo $row["plot_no"]." </td><br/></tr>";
    
}
echo"</table>";
?>


