<?php
include 'connect.php';

// http://localhost/sec05/htu-employees/deleteUser.php?id=27
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($con,$sql);

    if($result) {
        echo "data deleted successfully";
        header("Location:display.php");
    } else {
        echo "data deleted unsuccessfully";
        mysqli_error($con);
    }
}
?>