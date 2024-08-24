<?php
session_start();

if(isset($_SESSION['account'])) {
    unset($_SESSION['account']);
}

session_destroy();

header("Location:products.php");
?>