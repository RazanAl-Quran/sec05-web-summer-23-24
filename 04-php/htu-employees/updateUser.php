<?php

include 'connect.php';

// http://localhost/23--24-summer/sec05/htu-employees/updateUser.php?id=1
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id;";
$result = mysqli_query($con,$sql);
$empDetails = mysqli_fetch_assoc($result);

print_r($empDetails);

$name = $empDetails['name']; //Ali
$salary = $empDetails['salary']; //900

if(isset($_POST['updateEmp'])) {
    $name = $_POST['name'] ; //Ali
    $salary = $_POST['salary']; //1900
    
    $sql = "UPDATE users SET name='$name' , salary = $salary WHERE id = $id;";
    $result = mysqli_query($con,$sql);

    if($result) {
        echo "data updated successfully";
        header("Location:display.php");
    } else {
        echo "data updated unsuccessfully";
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
                <input type="text" class="form-control" name="name" value = <?php echo $name;?> >
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" value = <?php echo $salary;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="updateEmp">Update Employee</button>
        </form>
    </div>

    
</body>
</html>