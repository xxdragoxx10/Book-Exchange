<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Enroll Page</title>
</head>
<body>
<p align="center"> User Enroll Page</p>
<form action="UserInsert.php" enctype="multipart/form-data" method="post">
<table align="center">
	<tr>
		<td>
			User Name
		</td>
		<td>
			<input type="text" name="name" />
		</td>
	</tr>
	<tr>
		<td>
			Email
		</td>
		<td>
			<input type="text" name="email" />
		</td>
	</tr>
		<tr>
		<td>
			Profile Pic
		</td>
		<td>
			<input type="file" name="picture" />
		</td>
	</tr>
		<tr>
		<td>
			Bio
		</td>
		<td>
			<input type="text" name="bio" />
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="submit" />
		</td>
	</tr>
</table>
</form>
</body>
</html>