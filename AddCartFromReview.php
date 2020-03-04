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

$sumQuery="select (COUNT(book_id)) FROM cart WHERE book_id= ". $_POST["bookId"] . " and email=    ".$_POST['email']."";
$sum= mysqli_query($connect, $sumQuery);
$cartInsert = "insert into cart values(null, '" .
$_POST['name'] .
"', '" .
$_POST['email'] .
"', '" .
$_POST["bookId"] .
"')";
$result = mysqli_query($connect, $cartInsert);

header("Location: ShoppingCart.php?" . 'name=' . $_POST['name'] .  '&email=' . $_POST['email'] . 'bookId=' . $_POST["bookId"]  );
?>

</body>
</html>