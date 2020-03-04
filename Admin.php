<html>
<head>
<meta charset="utf-8">
<title>Administrator Page</title>
</head>
<body>
<?php
	include("Connect_Database.php");
?>

<?php
	$selectUsers = "select * from users";
	$results = mysqli_query($connect, $selectUsers);
?>
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
		print "<td>";
		print "<a href='UserDelete.php?";
		print "email=" . $row["email"] . "'>";
		print "DELETE";
		print "</a>";
		print "</td>";
		print "</tr>";
	}
?>
</table>
</body>
</html>