<html>
<head>
<meta charset="utf-8">
<title>shopping Page</title>
</head>
<body>

<?php
	include("MainMenu.php");
	
?>
<?php
	include("Connect_Database.php");
?>

<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
	;
?>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>
			Title
		</th>
		<th>
			description
		</th>
		<th>
			post time
		</th>
		<th>
			cost
		</th>
		<th>
			picture
		</th>
		<th></th>
	</tr>
<?php
	while($row = mysqli_fetch_assoc($results))
	{
		$bookTitle = $row["title"];
		$postTime = $row["posttime"];
		$userName = $_GET['name'];
		$userEmail = $_GET['email'];
		print "<tr >";
		print "<td>";
		print "<a href='bookreviews.php?name=$bookTitle&postime=$postTime&userName=$userName&userEmail=$userEmail&email=$userEmail'";
		print "title=" . $row["title"] . "'>";
		print $row["title"];
		print "</td>";
		print "<td>";
		print ($row["description"]);
		print "</td>";
		print "<td>";
		print ($row["posttime"]);
		print "</td>";
		print "<td>";
		print "$";
		print ($row["cost"]);
		print "</td>";
	
		print "<td>";
		print "<img src='";
		print $row["picpath"] . "' height = 80px width = 80px>";
		print "</td>";
		print "<td>";
		// $book = 'bookId=' . $row["bookId"] . '&booktitle=' . $row["title"] .
		// '&bookname=' . $row["name"] . '&picpath=' $row["picpath"];
		print "<a href='AddCart.php?";
		print "bookId=" . $row["bookId"] .  '&name=' . $_GET['name'] . '&email=' . $_GET['email'] . "'>";
		print "ADD TO CART";
		print "</td>";
		print "</tr>";
	
	// 	print "<td>";
	// 	print "<a href='UserDelete.php?";
	// 	print "email=" . $row["email"] . "'>";
	// 	print "DELETE";
	// 	print "</a>";
	// 	print "</td>";
	// 	print "</tr>";
	// 
}
?>
</table>
</body>
</html>