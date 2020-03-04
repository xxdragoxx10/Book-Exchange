<html>
<head>
<meta charset = "utf-8">
<title>Connect Database</title>
</head>
<body>
    <?php
        $connect = mysqli_connect("localhost","root","123456");
        mysqli_select_db($connect,"cs3337");
        ?>
</body>

</html>