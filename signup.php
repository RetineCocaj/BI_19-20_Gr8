<?php
    session_start();
    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = '';
        $dbname = 'Corporate_Clean'; 
        $link = new mysqli($dbhost, $dbuser, $dbpass);

           
    $mysqli_query = "CREATE TABLE users (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        email VARCHAR(20) NOT NULL,
        password VARCHAR(25) NOT NULL)";


        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
            
        } else {
            
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<p>That email address has already been taken.</p>";
                
            } else {
                
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    $_SESSION['email'] = $_POST['email'];
                    
                    header("Location: session.php");
                    
                } else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                    
                }
                
            }
            
        }
        
        
    }

    


?>
<hmtl>
    <head>
    <title>Sign Up</title>
        <style>
            p{ font-weight: bold;
            padding: 5px;}
            #email{
                border-radius: 5px;
                padding: 5px;
            }
            #password{
                border-radius: 5px;
                padding: 5px;
            }
        
        
        </style>
    </head>
    <body>
<form method = "post">
    <p>Write your email addres:</p>
    <input name="email" type="text" placeholder="Email address" id="email"><br>
    <p>Write your password:</p>
    <input name="password" type="password" placeholder="Password" id="password"><br>
    
    <input type="submit" value = "Sign up">
   

</form>
 </body>
</hmtl>