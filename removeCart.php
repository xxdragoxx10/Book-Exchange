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
	$userDelete = "delete from cart where book_id='". 
	$_GET["bookId"] ."'";
	$result = mysqli_query($connect, $userDelete);
	header("Location: ShoppingCart.php?" . 'name=' . $_GET['name'] .  '&email=' . $_GET['email']);
?>
</body>
</html>