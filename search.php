<html>
<head>
<meta charset="utf-8">
<title>Search Results</title>
</head>
<body>

<?php
include("MainMenu.php")
 
?>
<?php
	include("Connect_Database.php");
?>

<?php
	$selectBooks = "select * from books";
	$results = mysqli_query($connect, $selectBooks);
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
    $query = $_GET['query']; // gets value sent over search form
     
    $min_length = 1; // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query);  // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($connect,$query); // makes sure nobody uses SQL injection
        
        $sql = "SELECT * FROM books
        WHERE (`title` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')";       

        $raw_results = mysqli_query($connect,$sql);
	   
		
		if(mysqli_num_rows($raw_results)==0){
			print "<h5>";
			print "no results";
			print "</h5>";
		}





        // if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
        //     while($results = mysqli_fetch_array($raw_results)){
        //     // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
        //         echo "<p><h3>".$results['title']."</h3>".$results['name']."</p>";
        //         // posts results gotten from database(title and text) you can also show id ($results['id'])
        //     }
             
        // }
        // else{ // if there is no matching rows do following
        //     echo "No results";
        // }
         
    }
    else{ //if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>


<?php
	while($row = mysqli_fetch_assoc($raw_results))
	{
		$bookTitle = $row["title"];
		$postTime = $row["posttime"];
		$userName = $_GET['name'];
		$userEmail = $_GET['email'];
		print "<tr>";
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

		print "<a href='AddCart.php?";
		print "bookId=" . $row["bookId"] .  '&name=' . $_GET['name'] . '&email=' . $_GET['email'] . "'>";
		print "ADD TO CART";
		print "</td>";
		print "</tr>";
	}
?>
</table>
</body>
</html>