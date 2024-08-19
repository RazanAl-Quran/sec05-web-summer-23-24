<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> source page </h1>
    <?php
    $username2 = "Yazan";
    $id2 = 20090;
    header("Location:distination.php?name2=$username2&id=$id2");
    ?>
</body>

</html>