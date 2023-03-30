<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anjungan_mahasiswa";

$nim = $_POST['user_id'];
$pass = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (nim, password)
VALUES ('$nim', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>