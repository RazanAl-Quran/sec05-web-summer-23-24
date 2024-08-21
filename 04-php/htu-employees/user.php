<?php

include 'connect.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST['add-employee'])) {
    // collect the data from the form 
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO users (name,salary) VALUES ('$name',$salary)";

    $result = mysqli_query($con,$sql);

    if($result) {
        echo "data inserted successfully";
        header("Location:display.php");
    } else {
        echo "data inserted unsuccessfully";
        mysqli_error($con);
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
    <button class="btn btn-primary my-5"> <a href="display.php" class="text-light">All Users</a></button>

    <div class="container my-5">

        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <button type="submit" name="add-employee" class="btn btn-primary">Add Employee</a></button>
        </form>

        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <button type="submit" name="add-admin" class="btn btn-primary">Add Employee</a></button>
        </form>
    </div>
</body>

</html>