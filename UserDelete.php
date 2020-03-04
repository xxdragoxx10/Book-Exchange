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
	$userDelete = "delete from users where email='". 
	$_GET["email"] ."'";
	$result = mysqli_query($connect, $userDelete);
	header("Location: Admin.php");

?>
</body>
</html>