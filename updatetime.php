<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";
$waittime= $_GET["time1"]; //When using chatfuel use the .php?={{variable}}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//When user makes request this is where it gets updated
$sql = "UPDATE Time SET WaitA=$waittime WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
