<?php
$servername = "localhost";
$username = "wait";
$password = "1q2w3e";
$dbname = "wait";
$party= $_GET["People"];
$name= $_GET["Name"];
$time1= $_GET["time"];
$phone= $_GET["Phone"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ResA (Party, Name, Time, Phone) VALUES ('$party', '$name', '$time1', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
{
 "messages": [
   {"text": "We have a reservation for <?php echo $party ?> at <?php echo $time1 ?> under the name <?php echo $name ?> with the phone number <?php echo $phone ?>"},
 ]
}