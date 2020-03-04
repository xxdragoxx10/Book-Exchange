<?php
	include("Connect_Database.php");
?>

<?php
	$selectCart = "select * from cart where name ='" . $_GET["name"] . "'";
	$results = mysqli_query($connect, $selectCart);
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
    <div class="card-header">
        Checkout
    </div>

    <div class="card">
        <div class="card-body">

            <ul>

                <?php
                $sum=0;
                while($row = mysqli_fetch_assoc($results))  
                {
                $getBooks = "select * from books where bookId=' "   . $row["book_id"] ." '";
                $bresult = mysqli_query($connect, $getBooks);
                while($row2 = mysqli_fetch_assoc($bresult))
                {
                print "<li>";
                    print ($row2["title"]);
                    print"..........$";
                    print ($row2["cost"]);
                    $sum+=($row2["cost"]);
                    print "</li>";
                }
            }
            ?>
            </ul>
        </div>
        <div class="card-footer">
            total:..........$<?php
                           print "$sum";
                        ?>

        </div>
    </div>

    <?php
    $name=$_GET["name"];
    $email=$_GET["email"];
    $bookId=$row["book_Id"];

    print "<a href='proceedToCheckout.php?name=$name&email=$email'> procced to Checkout <i class='fas fa-cash-register'></i></a>";
    ?>
</body>

</html>