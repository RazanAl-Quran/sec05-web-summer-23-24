<?php
require('connect.php');

session_start();

if(isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['account'])) {
        $name = $_POST['product_name'];
        $image = $_POST['product_image'];
        $price = $_POST['product_price'];
        $quantity = $_POST['product_quantity'];
        $user = $_SESSION['account'];

        $sql = "INSERT INTO `orders` (`product_name`, `product_price`, `product_image`, `product_quantity`, `username`) VALUES ('$name','$price','$image','$quantity','$user')";

        $result = mysqli_query($con,$sql);

        if($result) {
            echo "<script>alert('cake added')</script>";
        } else {
            mysqli_error($con);
        }
        
    } else {
        echo "<script>alert('please sign in first')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Products Shop</h1>
    <p>Welcome to Products Shop</p>

    <?php
    if (isset($_SESSION['account'])) {
        $username = $_SESSION['account'];
        echo "
        <p> Hello $username, <a href='signout.php'> Sign Out </a> </p>
        ";
    } else {
        echo "<a href='signin.php'> Sign in </a>";
    }
    ?>

    <div class="container">
        <div class="row">

            <?php
            $sql = "SELECT * FROM products;";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    // print_r($row);
                    $id = $row['id'];
                    $name = $row['product_name'];
                    $desc = $row['product_desc'];
                    $image = $row['product_image'];
                    $price = $row['product_price'];

                    echo "
            
                  <div class='card col-md-4 my-5 mx-auto' style='width: 18rem;'>
                    <img src='$image' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$name</h5>
                        <p class='card-text'>$desc</p>
                        <p class='card-text'> price: $price JD</p>

                        <form method='post'>
                            <input type='hidden' name='product_name' value= '$name'>
                            <input type='hidden' name='product_image' value= '$image'>
                            <input type='hidden' name='product_price' value= '$price'>
                            <input type='hidden' name='product_desc' value= '$desc'>
                            <input type='number'  name='product_quantity' min='1' required>
                            <input type='submit' name='add_to_cart' value='Add to Cart'>
                        </form>

                        <a href='product.php?id=$id' class='btn btn-primary'>Show Cake</a>
                    </div>
                </div>

                ";

                }

            }
            ?>

        </div>
    </div>

</body>

</html>