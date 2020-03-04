<?php
if(!isset($_SESSION)){
	session_start();
		$name_email = 'name=' . $_SESSION['name'] . 
					'&email=' . $_SESSION['email'] . 
					'&picpath=' . $_SESSION['picpath'] . 
					'&bio=' . $_SESSION['bio'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <h1>
        Book Exchange
    </h1>
    <form action="search.php" method="GET">
<?php
		print "<input type=hidden name=name value =" . $_GET['name'] . ">";
		print "<input type=hidden name=email value =" . $_GET['email'] . ">";
?>
        <input type="text" name="query" />

        <input class="submitbox" type="submit" value="Search" />

    </form>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <a href="shopping.php?<?php print $name_email; ?>">Shopping</a>
                </div>
                <div class="col-md">
                    <a href="selling.php?<?php print $name_email; ?>">Selling</a>
                </div>
                <div class="col-md">
                    <a href="profile.php?<?php print $name_email; ?>">Profile</a>
                </div>
                <div class="col-md">
                    <a href="ShoppingCart.php?<?php print $name_email; ?>"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>

</body>

</html>