<?php
$servername = "172.27.0.2";
$username = "root";
$password = "admin";
$dbname = "Trucorp";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT (ID) AS Total FROM users";
$result = $conn->query($sql);
$result = $result->fetch_assoc();

echo $result['Total'];


$conn->close();
?>
