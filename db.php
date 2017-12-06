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

// sql to create table
$sql = "CREATE TABLE ResA(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
WaitResA VARCHAR(30) NOT NULL,
Party VARCHAR(30) NOT NULL,
Name VARCHAR(50),
Time VARCHAR(30) NOT NULL,
Phone VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>