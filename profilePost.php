
<html>
<head>
<meta charset="utf-8">
<title>Profile Post Page</title>
</head>
<body>

<?php
    include("MainMenu.php");
?>

<?php
	include("Connect_Database.php");
?>

<?php
	$profile = "select * from users where name='" .
				$_GET["name"] ."'";
	$results2 = mysqli_query($connect, $profile);
?>


<table align="center">
	<tr>
		<td>
		<p>
		<font size="6">
			<?php 
			
			print "Welcome to your Profile!";
			?>
		</font>
		</p
		</td>
	</tr>
	<tr>
		<td>
		<p>
				<?php 
				while($row = mysqli_fetch_assoc($results2))
				{
					print "<tr>";
					print "<td>";
					print "<img src='";
					print $row["picpath"] . "' height='150' width='150'>";
					print "</td>";
					print "<td>";
					print $row["bio"];
					print "</td>";				
					print "</tr>";
				}
				?> 
		</P>
		</td>
	</tr>
</table>
</body>
</html> 
