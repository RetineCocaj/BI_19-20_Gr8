<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'CorporateClean'; 

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $connection->connect_error);
}

$contactName=$_POST['contactName'];
$managementComp=$_POST['managementComp'];
$businessName=$_POST['businessName'];
$propAddr=$_POST['propAddr'];
$city=$_POST['city'];
$tel=$_POST['phone'];

$sqlQuery = "INSERT INTO Bookings (contactName,managementComp,businessName,propAddress,city,tel)
          VALUES('$contactName', '$managementComp','$businessName','$propAddr','$city','$tel')";
if ($conn->query($sqlQuery) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Data successfully saved")';
    echo '</script>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();

header('Location: http://localhost:8888/BI_19-20_Gr8/FullWidth.html');
?>


