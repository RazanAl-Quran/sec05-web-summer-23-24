<?php
include 'connect.php';
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
    <h1>Employees panel</h1>
    <p>Welcome to HTU Employees Dashboard Panel</p>

    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = 'SELECT * FROM users;';

                $result = mysqli_query($con, $sql);
                // print_r($result);
                if ($result) {

                    $allusers = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    print_r($allusers);

                    foreach ($allusers as $row) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $salary = $row['salary'];

                        echo " <tr>
                       <th scope='row'>$id</th>
                       <td>  $name </td>
                       <td> $salary </td>

                       <td>
                         <button class='btn btn-primary'><a class='text-light' href='updateUser.php?id=$id' >Update</a></button>
                         <button class='btn btn-danger'><a class='text-light' href='deleteUser.php?id=$id' >Delete</a></button>
                       </td>
                       </tr>";


                    }

                } else {
                    echo "problem in getting the data from users table";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>