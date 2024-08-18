<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // send a request from the web server to our DB server in order to get all the courses 
    $courses = array('programming', 'advanced programming', 'data structures');
    echo "<h3> Our Courses are: </h3>";
    echo "<ul>";
    for ($i = 0; $i < count($courses); $i++) {
        echo "<li>$courses[$i]</li>";
    }
    echo "</ul>";

    // TABLES
    $grades = array("khaled" => 80, "Saif" => 100, "rana" => 98);

    echo "<table border='1'>";
    echo "
  <tr>
    <th>Name</th>
    <th>Grade</th>
  </tr>
  ";
    foreach ($grades as $student => $grade) {
        echo "
      <tr>
        <td>$student</td>
        <td>$grade</td>
      </tr>
      ";
    }
    echo "</table>";


    ?>
</body>

</html>