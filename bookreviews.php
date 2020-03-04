<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book review</title>
</head>

<body>
<?php
    include("MainMenu.php");
?>
<?php
	include("Connect_Database.php");
	
?>

<?php



	if(isset($_POST['updateReview'])){
		$reviewText = $_POST['reviewTextField'];
		$reviewUpdate = $_POST['updateReview'];
		$reviewBookTitle = $_POST['bookTitle'];
		$reviewBookID = $_POST['bookID'];
		$reviewUserID  = "";
		$userID = $_POST['userID'];
	}
	$userName = $_GET['userName'];
	$userEmail = $_GET['userEmail'];
	$bookTitle = $_GET['name'];
	$postTime = $_GET['postime'];
	$selectBooks = "SELECT * 
			  FROM books
			  WHERE `title` = '$bookTitle'
			  AND `posttime` = '$postTime'";
	//$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
	
	if(isset($reviewUpdate) && $reviewUpdate === 'true'){
		$query = "INSERT INTO `reviews` (`bookID`, `title`, `userID`, `review`)
				  VALUES ('$reviewBookID', '$reviewBookTitle', '$userID', '$reviewText')";
		mysqli_query($connect, $query);
	}
?>

<?php
	while($row = mysqli_fetch_assoc($results))
	{
		$bookID = $row['bookId'];
		$bookTitle = $row['title'];
		print "<form action=AddCartFromReview.php enctype=multipart/form-data method=post>";
		print "<input type=hidden name=name value =" . $_GET['userName'] . ">";
		print "<input type=hidden name=email value =" . $_GET['userEmail'] . ">";
		print "<input type=hidden name=bookId value =" . $row['bookId'] . ">";
	
		print "<div class='container'>";
        print "<div class='row'>";
		print "  <div class='col'>";
		print "       <img src='";
		print $row['picpath'];
		print "''>";
		print "   </div>";
		print "   <div class='col'>";
		print "      <h3>";
		print $row['title'];
		print "      </h3>";
		print "      seller: ";
		 print $row['name'];
		print "      <h2>";
		print "$";
		print $row['cost'];
		print "     </h2>";
		print "     <input type='submit' value='add to cart'>";
		print "     <div>";
		print $row['description'];
		print "     </div>";
		print "  </div>";
		print " </div>";
		print " <div class='row'>";
        print "    <div class='col'>";
		print "    <span class='fa fa-star checked'></span>";
		print "   <span class='fa fa-star checked'></span>";
		print "   <span class='fa fa-star checked'></span>";
		print "  <span class='fa fa-star'></span>";
		print "  <span class='fa fa-star'></span>";
		print "  </div>";
        print "</div>";
		print "</div>";
		print "</form>";
	}
	
	$query = "SELECT `userid`
			  FROM `users`
			  WHERE `name` = '$userName'
			  AND `email` = '$userEmail'";
	$result = mysqli_query($connect, $query);
	
	while($row = mysqli_fetch_assoc($result)){
		$userID = $row['userid'];
	}
	//This is the textarea for reviews to be typed in.
?> 
	<!-- <textarea for="userReviews" id="reviewTextField" name="reviewTextField" rows=5 cols=50></textarea> -->
	
	
<br>
<hr>
<?php	
	//This is the table of all reviews
	$query = "SELECT a.review, b.name
	          FROM reviews as a
			  LEFT JOIN users b ON a.userID = b.userid
			  WHERE `bookID` = $bookID";
			  
	$result = mysqli_query($connect, $query);
	
	
	while($row = mysqli_fetch_array($result)){
		$review = $row['review'];
		$reveiwer = $row['name'];
		
		print "<div class='card'>";
        print "<div class='card-body'>";
		print "   <h5>$reveiwer</h5>";
		print $review;
        print "</div>";
		print "</div>";
	}
	
	
	
?>

<br>
<hr>

	<form id="userReviews" action="bookreviews.php?name=<?php echo $bookTitle; ?>&postime=<?php echo $postTime; ?>&userName=<?php echo $userName; ?>&userEmail=<?php echo $userEmail; ?>&email=<?php echo $userEmail; ?>" method="POST" >
	<input type="hidden" name="updateReview" value="true">
	<input type="hidden" name="bookTitle" value="<?php echo $bookTitle; ?>">
	<input type="hidden" name="bookID" value="<?php echo $bookID; ?>">
	<input type="hidden" name="posttime" value="<?php echo $bookID; ?>">
	<input type="hidden" name="userID" value="<?php echo $userID; ?>">
	<textarea name="reviewTextField"></textarea><br>
	<input type="submit" value="Submit Review">
	</form>
</body>
</html>