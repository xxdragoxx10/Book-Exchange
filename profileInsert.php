<!---
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile Insert</title>
</head>
<body>
<?php
    include("MainMenu.php");
?>
<?php
	if ($_FILES["pic"])
	{
		$pathname2 = "pictures/" . $_FILES['pic']['name'];
		move_uploaded_file($_FILES['pic']['tmp_name'], $pathname2);
	}
?>
<?php
	include("Connect_Database.php");
?>
<?php
	$profileInsert = "update users picpath = '" . 
		$pathname2 . 
		"' where name ='" . 
		$_POST["name"] . 
		"' AND email = '" . 
		$_POST["email"] . 
		"';";
		
	$result = mysqli_query($connect, $profileInsert); 
	//header("Location: profile.php")
?>
</body>
</html>
--->