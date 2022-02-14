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

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = $conn->query($sql);
$temp = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $temp++;
  }
} else {
  echo "0 results";
}
echo "Jumlah Karyawan : " $temp;
$conn->close();
?>
