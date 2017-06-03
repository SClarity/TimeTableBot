<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Time";
$result = $conn->query($sql);
$rows = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
} else {
    echo "0 results";
}

$TimeW = array_column($rows, 'WaitA');
$conn->close();
?>

{
 "messages": [
   {"text": "<?php echo $rows[0]["WaitA"]; ?> Minutes"}
 ]
}
