

<?php
include("MainMenu.php")
 
?>

<?php




include("Connect_Database.php");
$selectCart = "select * from cart where name='" . $_GET["name"] . "'";
$results = mysqli_query($connect, $selectCart);



 $query="delete from cart where name= '".$_GET['name']."' and email='".$_GET['email']."'" ;

 

 //print $query;
 mysqli_query($connect, $query);
//header("Location:ShoppingCart.php");



?>


<?php
	while($row = mysqli_fetch_assoc($results))
	{
	$getBooks = "delete from books where bookId=  '  " . $row["book_id"] ."  '   ";
	$bresult = mysqli_query($connect, $getBooks);
	
}

// header("Location: ShoppingCart.php?" . "name=" .  $_GET["name"] . '&email=' . $_GET["email"] . "'");
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="ShoppingCart.php" enctype="multipart/form-data" method="GET">
<?php
?>
<table align="center">
	<tr>
		<td>
			User Name
		</td>
		<td>
			<input type="text" name="name" value="<?php 
			print $_GET['name'];?>" />
		</td>
	</tr>
	<tr>
		<td>
			Email
		</td>
		<td>
			<input type="text" name="email" value="<?php 
			print $_GET['email'];?>" />
		</td>
	</tr>

	<tr>
		<td>
			creditcard
		</td>
		<td>
			<input type="text" name="title" />
		</td>
	</tr>

	<tr>
		<td>
			adress
		</td>
		<td>
			<input type="text" name="description" />
		</td>
	</tr>
	
	<tr>
		<td>
			zip
		</td>
		<td>
			<input type="text" name="cost" />
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="submit" />
		</td>
	</tr>
</form>
</body>
</html>


