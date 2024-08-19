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

    print_r($_REQUEST);

    ?>

<h1>
        Hello 
        <?php echo $_REQUEST['name2']?> and your id is  <?php echo $_REQUEST['id2']?>
    </h1>

</body>

</html>