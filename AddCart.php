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
$sumQuery="select (COUNT(book_id)) FROM cart WHERE book_id= ". $_GET["bookId"]. " and email=    ".$_GET['email']."";
$sum= mysqli_query($connect, $sumQuery);
$cartInsert = "insert into cart values(null, '" .
$_GET['name'] .
"', '" .
$_GET['email'] .
"', '" .
$_GET["bookId"] .
"')";
$result = mysqli_query($connect, $cartInsert);

header("Location: shopping.php?" . 'name=' . $_GET['name'] .  '&email=' . $_GET['email']  );
?>

</body>
</html>