<html>
<head>
	<style>
table{
	width: 500px;
	table-layout: fixed;
	background: rgba(240, 248, 255,0.7);
}
</style>
</head>
<body background="bg.jpg">
	<?php 
$rows = htmlspecialchars($_POST["rows"]); 
$cols = htmlspecialchars($_POST["cols"]);

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lab4");
if(!$connection || !$db){
	exit(mysqli_error());
}

if ($rows < 3 || $cols < 3) 
{ 
	mysqli_query($connection, "INSERT INTO `incorrect`(`tables`,`rows`, `cols`) VALUES ('4','$rows','$cols')");
print "<br /> <b> ERROR: </b> Input is incorrect. Not able to build the table. The number of the rows and columns should be not less than 2"; 
} 
else{
	mysqli_query($connection, "INSERT INTO `correct`(`tables`,`rows`, `cols`) VALUES ('4', $rows','$cols')");
require 'tbl4.php';
}

?>
</body>

</html>