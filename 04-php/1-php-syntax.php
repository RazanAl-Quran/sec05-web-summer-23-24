<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello from my first PHP</h1>
    <?php
    $username = 'sherry';
    echo "<p class='card-cat' >Hello from $username</p>";

    $x = "hello";
    $y = "world";
    // $z = $x ." ". $y;
    $z = "$x $y";
    echo $z;

    echo "<br>";
    echo strlen("Hello world!");
    echo "<br>";

    $cars = array("Volvo", "BMW", "Toyota");

    for ($i = 0; $i < count($cars); $i++) {
        echo "$cars[$i] <br>";
    }

    // Associative Arrays
    $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");

    echo $students["Ahmad"];

    ?>

</body>

</html>