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
<h1 style="position:absolute;top:100px;left:750px;font-family:'algerian';color:black">LOGIN FORM</h1>
<h1 style="position:absolute;top:190px;left:750;color:black;left:750px">USER ID</h1>
<input type="text" name="user_id" placeholder="enter your user id here"style="position:absolute;top:260px;left:750px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:black;left:750px">PASSWORD</h1>
<input type="password" name="pwd" placeholder="enter your password" style="border-width:2px;position:absolute;top:345px;left:750px;height:35px;width:400px">
<input type="submit" value="LOGIN" style="position:absolute;top:410px;left:750px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<body>
<button onclick="document.location='home.php'" style="background-color:yellow;width:150px">back</button>

</body>
</html>
<?php
include("conn.php");
$id=$_POST['user_id'];
$password=$_POST['pwd'];
if(empty($password) and empty($id))
{
	echo"<h3 style='color:red;position:absolute;left:750px;top:450px'><u>"."PLESAE ENTER USER ID AND PASSWORD"."</u></h3>";
}
else
{
$query="select * from admin where id='$id' and password='$password';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	header('location:work.php');
}
else
{
	echo"<h3 style='color:red;position:absolute;left:750;top:450px'><u>"."PLEASE ENTER CORRECT USERNAME AND PASSWORD"."</u></h3>";
}
}
?>