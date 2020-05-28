<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'CorporateClean'; 

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $connection->connect_error);
}

$sqlQuery = "CREATE TABLE IF NOT EXISTS Employees (
    id_emp INT(4) PRIMARY KEY, 
    emp_name VARCHAR(30) NOT NULL,
    service_name VARCHAR(30) NOT NULL)";

if ($conn->query($sqlQuery) === TRUE) {
    echo '<h1>Table created successfully!</h1>';
} else {
    echo "Error creating SQL table: " . $conn->error;
}

$filename = "employees.json";
$data = file_get_contents($filename);

$array = json_decode($data, true);

foreach($array as $row){
    $sql = "INSERT INTO Employees(id_emp,emp_name,service_name)
            VALUES('".$row["id_emp"]."','".$row["emp_name"]."','".$row["service_name"]."')";
    mysqli_query($conn, $sql);
}

echo '<h1>Employee data inserted!!!</h1>';

?>