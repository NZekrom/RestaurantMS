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


$sql = "SELECT * FROM w_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>".str_repeat("&nbsp;", 12)."Name</th><th>".str_repeat("&nbsp;", 4)."JOB</th><th>".str_repeat("&nbsp;", 17)."SALARY</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".str_repeat("&nbsp;", 17)."".$row["wname"]."</td><td>".str_repeat("&nbsp;", 17)."".$row["job"]."</td><td>".str_repeat("&nbsp;", 17)."".$row["salary"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>