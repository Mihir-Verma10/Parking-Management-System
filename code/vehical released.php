<html>
<head>
<style>
body{
background-image:url("bg1.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<form method="POST">
<h1 style="position:absolute;top:100px;left:750px;font-family:'algerian';color:black">REMOVE VEHICAL FROM PARKING</h1>
<h1 style="position:absolute;top:190px;left:150;color:black;left:750px">TYPE OF VEHICAL</h1>
<input type="text" name="type" placeholder="enter vehical type here"style="position:absolute;top:260px;left:750px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:black;left:750px">VEHICAL NUMBER</h1>
<input type="text" name="number" placeholder="enter vehical number" style="border-width:2px;position:absolute;top:345px;left:750px;height:35px;width:400px" required>
<input type="submit" value="CHECK OUT" style="position:absolute;top:410px;left:750px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<button onclick="document.location='WorK.php'" style="background-color:yellow;width:150px">admin page</button>
<button onclick="document.location='vehical arrives.php'" style="background-color:yellow;width:150px">checkin page</button>
<button onclick="document.location='vehical list.php'" style="background-color:yellow;width:150px">list of all vehicals</button>
<body>
</body>
</html>
<?php
include("conn.php");
$type=$_POST['type'];
$number=$_POST['number'];
if(empty($type) and empty($number))
{
	echo"<h3 style='color:red;position:absolute;left:750px;top:450px'><u>"."PLESAE ENTER VEHICAL NUMBER AND VEHICAL TYPE"."</u></h3>";
}
else
{
$query="select * from vehical where vehical_type='$type' and vehical_no='$number';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	$q1="delete from vehical where vehical_type='$type' and vehical_no='$number';";
	$que=mysqli_query($conn,$q1);
	if($que)
	{
		echo"<h3 style='color:red;position:absolute;left:750px;top:450px'><u>"."VEHICAL CHECKED OUT FROM PARKING"."</u></h3>";

	}
}
else
{
	echo"<h3 style='color:red;position:absolute;left:750;top:450px'><u>"."THIS VEHICALIS NOT IN PARKING"."</u></h3>";
}
}
?>