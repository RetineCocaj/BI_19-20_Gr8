<?php

$cookie_name ="loggedin";
if(isset($_COOKIE[$cookie_name])){
    
    $cookie_value = $_COOKIE[$cookie_name];
    echo "Welcome $cookie_value";
    echo '<a href ="logout.php">Logout</a>';
    
}


?>