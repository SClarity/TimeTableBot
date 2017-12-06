<?php
$servername = "localhost";
$username = "wait";
$password = "1q2w3e";
$dbname = "wait";
$waittime= $_GET["time1"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE ResA SET WaitResA=$waittime WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>