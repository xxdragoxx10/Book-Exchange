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
	$cartDelete = "delete from saveforlater where book_id='". 
	$_GET["bookId"] . "'and name='" . $_GET['name'] . "'";
	$result = mysqli_query($connect, $cartDelete);
	
    $cartInsert = "insert into cart values(null, '" .
    $_GET['name'] .
    "', '" .
    $_GET['email'] .
    "', '" .
    $_GET["bookId"] .
    "')";
    $result2 = mysqli_query($connect, $cartInsert);
    header("Location: ShoppingCart.php?" . 'name=' . $_GET['name'] .  '&email=' . $_GET['email']);
    ?>
?>
</body>
</html>