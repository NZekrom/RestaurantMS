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

$z = $_POST['s_id'];
$x = $_POST['s_upd'];
$sql = "UPDATE w_info SET job='$x' WHERE id=". $z ." ";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>