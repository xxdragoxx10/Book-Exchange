<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
	include("Connect_Database.php");
?>

<?php
	if ($_FILES["picture"])
	{
		$pathname2 = "images/" . $_FILES['picture']['name'];
		move_uploaded_file($_FILES['picture']['tmp_name'], $pathname2);
	}
	$userInsert = "insert into users(name,email,picpath,bio) values('" . 
		$_POST["name"] .
		"', '" .
		$_POST["email"] .
		"', '" .
		$pathname2 .
		"', '" .
		$_POST["bio"] .
		"')";
	$result = mysqli_query($connect, $userInsert); 
	
	header("Location: login.php")
?>
</body>
</html>