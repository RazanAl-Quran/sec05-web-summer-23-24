<?php

session_start();

if(isset($_SESSION['username']) and isset($_SESSION['id'])) {

    unset($_SESSION['username']);
    unset($_SESSION['id']);
}

session_destroy();

header("Location:confirmation.php");
?>