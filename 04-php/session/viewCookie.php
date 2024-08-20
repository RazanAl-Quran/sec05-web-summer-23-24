<?php
if(isset($_COOKIE['username']) && isset ($_COOKIE['id']) ){
    echo "<p> name value is " . $_COOKIE['username'] . "</p>";
    echo "<p> id value is " . $_COOKIE['id'] . "</p>";
}
    
?>

