<?php
    session_start();
    if (array_key_exists('username', $_POST) OR array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'CorporateClean'; 

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($conn->connect_error) {
            die("Connection error: " . $connection->connect_error);
        }
           
        $sqlQuery = "CREATE TABLE IF NOT EXISTS Users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            username VARCHAR(20) NOT NULL,
            email VARCHAR(20) NOT NULL,
            password VARCHAR(25) NOT NULL)";

        if ($conn->query($sqlQuery) === TRUE) {
            echo '<p>Table created successfully!</p>';
        } else {
            echo "Error creating SQL table: " . $conn->error;
        }    


        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
        } else if ($_POST['username'] == '') {
            
            echo "<p>Username is required.</p>";
        
        } else{
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPass = hash('sha512',$password);

            $sqlUs = "SELECT * 
            FROM Users 
            WHERE (username='$username');";
            $resUs = mysqli_query($conn,$sqlUs);

            $sqlEm = "SELECT * 
            FROM Users 
            WHERE (email='$email');";
            $resEm = mysqli_query($conn,$sqlEm);

            if (mysqli_num_rows($resUs) > 0) {
                echo "<p>A user with this username already exists. Please try another.</p>";
            } else if(mysqli_num_rows($resEm) > 0){
                echo "<p>A user with this email already exists. Please try another.</p>";
            } else{
                $query = "INSERT INTO Users (username, email, password) VALUES('$username','$email','$hashPass')";

                if ($conn->query($query) === TRUE) {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("User has been registered");'; 
                    echo '</script>';  
                  } else {
                    $error = 'Error: ' . $sql . $conn->error;
                    echo '<script type="text/javascript">'; 
                    echo 'alert("'.$error.'");'; 
                    echo '</script>'; 
                }
            }
            
            /*
            if (mysqli_num_rows($res) > 0) {
                echo "<p>User has been registered.</p>";
                
            } else {
                
                $query = "INSERT INTO Users (username, email, password) 
                VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    $_SESSION['email'] = $_POST['email'];
                    
                    header("Location: session.php");
                    
                } else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                    
                }
                
            }*/
            
        }
        
        
    }

?>

<html>
    <head>
    <title>Sign Up</title>
        <style>
            p{ font-weight: bold;
            padding: 5px;}
            #email, #username{
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
    <p>Write your username:</p>
    <input name="username" type="text" placeholder="Username" id="username"><br>
    
    <p>Write your email address:</p>
    <input name="email" type="text" placeholder="Email address" id="email"><br>
    
    <p>Write your password:</p>
    <input name="password" type="password" placeholder="Password" id="password"><br>
    <br>
    <input type="submit" value = "Sign up">
   

</form>
 </body>
</html>