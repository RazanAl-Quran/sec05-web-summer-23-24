<?php
print_r($_POST);

session_start();

// if(isset($_POST['submit'])) {
    // echo "all good";
    $name2 = $_POST['name3'];
    $id2 = $_POST['id3'];
   $_SESSION['username'] = $name2;
   $_SESSION['id'] = $id2;

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello  <?php echo $_POST['name3']. ' Your id is '. $_POST['id3'];?></h1>
    <h1> Hello  <?php echo $_SESSION['username'] ?></h1>
    <a href="data.php"> Data Page  </a>
    <a href="destroy.php"> Logout  </a>
</body>
</html>