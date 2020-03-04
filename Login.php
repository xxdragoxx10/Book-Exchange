<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator Page</title>

</head>

<body>
<?php
	include("Connect_Database.php");
?>

<?php
	$searchUser = "select * from users where " .
		"name='" . $_POST["name"] . "' and " . 
		"email='" . $_POST["email"] . "'";
	print $_POST["name"];
	print $searchUser;
	$results = mysqli_query($connect, $searchUser);
	$row = mysqli_fetch_assoc($results);
	if (mysqli_num_rows($results) == 0)
	{
		header("Location: login.html");
		exit;
	}
	if (mysqli_num_rows($results) > 0)
	{
		if($row["userId"]==1){
				session_start();
		$_SESSION['name']= $_POST["name"];
		$_SESSION['email'] = $_POST["email"];
		header("Location: admin.php");
		exit;
		}
		else{
			session_start();
		$_SESSION['name'] = $_POST["name"];
		$_SESSION['email'] = $_POST["email"];
		$_SESSION['picpath'] = $_POST["picpath"];
		$_SESSION['bio'] = $_POST["bio"];
		header("Location: shopping.php?" . "name=" .  $_POST["name"] . '&email=' . $_POST["email"] . '&picpath=' . $_POST["picpath"] . '&bio=' . $_POST["bio"] . "'");
		exit;
		}
	
	}
	
?>
</table>
</body>
</html>