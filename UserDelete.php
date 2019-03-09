<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
</head>

<body>
<?php
	include("Connect_Database.php");
?>
<?php
	$userDelete = "Delete from users where email='" . 
	$_GET["email"] . "'";
	$result = mysqli_query($connect, $userDelete);
	header("Location: Admin.php");
?>
</body>
</html>