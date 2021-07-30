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
<h1 style="position:absolute;top:120px;left:520px;color:black;font-family:'algerian">ADD VEHICAL DETAILS</h1>
<input type="text" name="vname" placeholder="ENTER VEHICAL NAME" style="position:absolute;top:220px;left:500px;height:35px;width:215px" required>
<input type="text" name="oname" placeholder="ENTER OWNER NAME" style="position:absolute;top:220px;left:800px;height:35px;width:215px" required>
<input type="text" name="vtype" placeholder="ENTER VEHICAL TYPE" style="position:absolute;top:290;left:500px;height:35px;width:215px" required>
<input type="text" name="vnum" placeholder="ENTER VEHICAL NUMBER" style="position:absolute;top:290;left:800px;height:35px;width:215px" required>
<input type="text" name="mobile" placeholder="ENTER OWNER NUMBER" style="position:absolute;top:360;left:500px;height:35px;width:215px" required>
<input type="text" name="plot" placeholder="ENTER PARKING PLOT NUMBER" style="position:absolute;top:360;left:800px;height:35px;width:215px" required>
<input type="submit" value="checkin" style="position:absolute;top:430;left:500px;height:35px;width:520px;color:white;background-color:blue;font-size:20px;font-family:'algerian'">
</form>
<body>
<button onclick="document.location='WorK.php'" style="background-color:yellow;width:150px">admin page</button>
<button onclick="document.location='vehical list.php'" style="background-color:yellow;width:150px">list of all vehicals</button>
<button onclick="document.location='vehical released.php'" style="background-color:yellow;width:150px">checkout page</button>

</body>
</html>
<?php
include("conn.php");
$vname=$_POST['vname'];
$oname=$_POST['oname'];
$vtype=$_POST['vtype'];
$vnum=$_POST['vnum'];
$mobile=$_POST['mobile'];
$plot=$_POST['plot'];
if(empty($vname) or empty($oname) or empty($vtype) or empty($vnum) or empty($plot) or empty($mobile))
{
	echo'<h3 style="position:absolute;top:460px;left:480px;color:red;font-family:algerian"><u><blink>'."please enter data required data with correct manner"."</blink></h3>";

}
else
{
$query1="select * from vehical where vehical_no='$vnum';";
$q1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($q1);
	if($num>=1)
	{
	echo'<h3 style="position:absolute;top:460px;left:500px;color:red;font-family:algerian"><u><blink>'."the vehical is already in parking"."</blink></h3>";
	}
	else
	{

	$query="insert into vehical values('$oname','$vname','$vtype','$vnum',$mobile,$plot);";
$q=mysqli_query($conn,$query);
		if($q)
		{
	echo'<h3 style="position:absolute;top:460px;left:550px;color:red;font-family:algerian"><u><blink>'."vehical has been parked"."</blink></h3>";

		}
	}
}
?>