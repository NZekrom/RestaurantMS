<?php
$servername = "localhost";
$username = "NZekrom";
$password = "Water_Shuriken1";
$dbname = "r_workers";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$z = $_POST['s_name'];
$x = $_POST['s_job'];
$c = $_POST['s_eml'];
$v = $_POST['s_phn'];
$b = $_POST['s_amount'];

$sql = "INSERT INTO w_info (wname, job, email, phone, salary)
VALUES ('$z', '$x', '$c','$v','$b')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>