<?php

    session_start();
    
    if ($_SESSION['email']) {
        
        echo '<script> alert("You are logged in!");</script>';
        echo "<script>window.location.href = 'HomePage.php';</script>";
   } else {
        
        header("Location: signup.php");
        
    }
?>
