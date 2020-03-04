<?php
    include("MainMenu.php");
?>
<?php
    include("Connect_Database.php");
?>
                    <?php
                      $go = "select * from books where bookId =" . $_GET["bookId"] . "";
                       $results = mysqli_query($connect, $go);
                       $row = mysqli_fetch_assoc($results);
                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?php print $row['picpath'];?>">
            </div>
            <div class="col">
                <h3>
                    <?php
                       print $row['title'];
                    ?>
                </h3>
                seller: 
                <?php print $row['name'];?>
                <h2>
                $
                <?php print $row['cost'];?>
                </h2>
                <input type="submit" value="add to cart">
                <div>
                <?php print $row['description'];?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5>guy g9</h5>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam fugit optio quos minus, facere ea maxime
            consequatur. Eum numquam facere obcaecati placeat veritatis tempora officiis ullam velit ipsa odit.
            Temporibus?
        </div>
    </div>
    <div class="card">
            <div class="card-body">
                <h5>guy g9</h5>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam fugit optio quos minus, facere ea maxime
                consequatur. Eum numquam facere obcaecati placeat veritatis tempora officiis ullam velit ipsa odit.
                Temporibus?
            </div>
        </div>
        <form action="DisplayFavoriteWebsite" method="POST">
                write a review
                <br>
                <textarea name="webDescription"></textarea><br>
                <input type="submit" value="submit">
            </form>
</body>

</html>
