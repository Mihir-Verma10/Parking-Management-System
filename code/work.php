<?php
?>
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
<body>
<h1 style="position:absolute;top:100px;left:550px;width:800px;font-family:'algerian'"><b/>welcome to parking managment system</h1>
<a href="vehical arrives.php"><input type="button" style="position:absolute;top:250px;left:650px;font-family:'algerian';font-size:20px;height:50px;width:450px;background-color:yellow" value="CHECK IN VEHICAL"></a>
<a href="vehical released.php"><input type="button" style="position:absolute;top:350px;left:650px;font-family:'algerian';font-size:20px;height:50px;width:450px;background-color:yellow" value="CHECKOUT VEHICAL"></a>
<a href="vehical list.php"><input type="button" style="position:absolute;top:450px;left:650px;font-family:'algerian';font-size:20px;height:50px;width:450px;background-color:yellow" value="SHOW VEHICALS"></a>
<button onclick="document.location='home.php'" style="background-color:yellow;width:150px">LOGOUT</button>
</body>
</html>