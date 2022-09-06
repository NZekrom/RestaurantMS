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

$z = $_POST['s_nme'];
$x = $_POST['s_noe'];
$c = $_POST['s_bill'];

$sql = "INSERT INTO c_infor (c_name,phone_number,c_spend)
VALUES ('$z', '$x','$c')";

if ($conn->query($sql) === TRUE) {
  header("Location: pay_money.html");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>