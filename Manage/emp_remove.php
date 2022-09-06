<?php
$servername = "localhost";
$username = "NZekrom";
$password = "Water_Shuriken1";
$dbname = "r_workers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$z = $_POST['s_id'];
// sql to delete a record
$sql = "DELETE FROM w_info WHERE id=".$z."";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>