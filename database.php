<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = '';
$dbname = 'CorporateClean'; 
$conn = new mysqli($dbhost, $dbuser, $dbpass);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<br>';

$sql = 'CREATE Database '.$dbname;
if($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} 
else{
    echo "Error creating database: " . $conn->error;
}
echo '<br>';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sqlQuery = "CREATE TABLE Bookings (
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    contactName VARCHAR(30) NOT NULL,
    managementComp VARCHAR(30) NOT NULL,
    businessName VARCHAR(30) NOT NULL,
    propAddress VARCHAR(35) NOT NULL,
    city VARCHAR(20) NOT NULL,
    tel VARCHAR(25) NOT NULL)";

if ($conn->query($sqlQuery) === TRUE) {
    echo "Table created successfully!";
} else {
    echo "Error creating SQL table: " . $conn->error;
}


mysqli_close($conn);
?>
