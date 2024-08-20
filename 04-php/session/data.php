<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Page</h2>
    <?php
    echo "<h1> hello". $_SESSION['username']. "</h1>"
    ?>
     <a href="data.php"> Data Page  </a>
     <a href="destroy.php"> Logout  </a>
</body>
</html>