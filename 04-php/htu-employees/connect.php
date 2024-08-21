<?php

$con = new mysqli('localhost','root','','employees4');

if($con) {
    echo 'success connection';
} else {
    mysqli_error($con);
}

?>