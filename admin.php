<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="MainMenu.css" type="text/css" rel="stylesheet"/>
		<title>Administrator Page</title>
	</head>

	<body>	
		<?php
			include("Connect_Database.php");
		?>
		<?php
			$selectUsers = "select * from users;";
			$results = mysqli_query($connect, $selectUsers);
		?>
		<nav>
			<a href = "UserEnroll.php">Go to Enrollment Page</a>
		</nav>
		<?php
	    	session_start();
	    	$name_email = 'name=' . $_SESSION['name'] . '&email=' . $_SESSION['email'];
	    	#print $name_email;
		?>
        <ul class="ul_css">
            <a class="li_css_a" style="float:right" href = "logout.php?<?php print $name_email; ?>">Logout</a>
            <a class="li_css_a" style="float:right" href = "mail.php?<?php print $name_email; ?>">Email</a>
        </ul>
		<table align="center" border="2" width=400>
			<tr>
				<th>
					Name
				</th>
				<th>
					Email
				</th>
				<th>
					Delete
				</th>
			</tr>
		<?php
			while($row = mysqli_fetch_assoc($results))
			{
				print "<tr>";
				print "<td>";
				print ($row["name"]);
				print "</td>";
				print "<td>";
				print ($row["email"]);
				print "</td>";
				Print "<td>";
				Print "<a href='UserDelete.php?";
				Print "email=" . $row["email"] . "'>";
				Print "DELETE";
				Print "</a>";
				Print "</td>";
				print "</tr>";
			}
		?>
	</table>
</body>
</html>