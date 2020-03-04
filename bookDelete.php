
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
	$bookDelete = "delete from books where bookId='". 
	$_GET["bookId"] ."'";
	$result = mysqli_query($connect, $bookDelete);
	header("Location: profile.php?" . 'name=' . $_GET['name'] . '&email=' . $_GET['email'] . '&picpath=' . $_GET['picpath'] . '&bio=' . $_GET['bio']);
?>
</body>
</html>