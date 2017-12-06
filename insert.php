<?php
$servername = "localhost";
$username = "wait";
$password = "1q2w3e";
$dbname = "wait";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ResA (WaitResA, Party, Name, Time, Phone)
VALUES ('45', '5', 'John Smith','8 PM', '9292255958')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>