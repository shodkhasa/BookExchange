<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Book Name</title>
</head>

<body>
<?php
	include("MainMenu.php");
?>
<?php
	include("Connect_Database.php");
?>
<?php
	$selectBooks = "SELECT * FROM books WHERE bookId = " . $_GET['id'];
	$results = mysqli_query($connect, $selectBooks);
?>
<table align="center" border="2" width=400>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Title</th>
		<th>Post Time</th>
		<th>Picture</th>
	</tr>
<?php
while($row = mysqli_fetch_assoc($results)) {
	print "<tr>";
	print "<td>" . ($row["name"]) . "</td>";
	print "<td>" . ($row["email"]) . "</td>";
	print "<td>" . ($row["title"]) . "</td>";
	print "<td>" . ($row["posttime"]) . "</td>";
	print "<td>" . "<img src='" . $row["picpath"] . "' height = 100 width = 100>" . "</td>";
	print "</tr>";
}
?>
</table>
</body>
</html>