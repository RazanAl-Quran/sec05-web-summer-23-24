<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Confirmation page</h1>
    <?php
    // echo $_GET;
    // print_r($_GET);
    ?>

    <h1>
        Hello 
        <?php echo $_GET['name2']?> and your id is  <?php echo $_GET['id2']?>
    </h1>

    <?php
    echo "<h2> Hello ". $_GET['name2']. " and your ID id " . $_GET['id2']. "</h2>";
    ?>
</body>

</html>