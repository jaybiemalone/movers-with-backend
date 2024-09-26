<?php
// Koneksyon sa MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movers";

// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}

// Kunin ang data mula sa form
$driver = $_POST['driver'];
$client = $_POST['client'];
$email = $_POST['email'];
$trip_from = $_POST['trip_from'];
$trip_to = $_POST['trip_to'];
$trip_hours = $_POST['trip_hours'];
$amount = $_POST['amount'];
$tip = $_POST['tip'];
$trip_status = $_POST['trip_status'];

// I-insert ang data sa database
$sql = "INSERT INTO history (driver, client, email, trip_from, trip_to, trip_hours, amount, tip, trip_status) 
VALUES ('$driver', '$client', '$email', '$trip_from', '$trip_to', '$trip_hours', '$amount', '$tip', '$trip_status')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>