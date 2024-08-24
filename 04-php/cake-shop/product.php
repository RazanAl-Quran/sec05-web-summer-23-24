<?php

include 'connect.php';

$id = $_GET["id"];
$sql = "select * from products where id=$id;";
$cakeDetails = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($cakeDetails);
$name = $row['product_name'];
$desc = $row['product_desc'];
$image = $row['product_image'];
$price = $row['product_price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '
    <div class="card col-md-4 my-5 mx-auto" style="width: 18rem;">
        <img src="' . $image . '" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">' . $name . '</h5>
            <p class="card-text">' . $desc . '</p>
            <p class="card-text"> price: ' . $price . ' JD</p>
            
            <form method="post">
            <input type="hidden" name="product_name" value= ' . $name . '>
            <input type="hidden" name="product_image" value= ' . $image . '>
            <input type="hidden" name="product_price" value= ' . $price . '>
            </form>
        </div>
    </div>
    ';
    ?>
</body>

</html>