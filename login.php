<?php // merged
$username = $_POST['username'];
$password = $_POST['password'];
$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "cis4379";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM employee WHERE Login='$username' AND Password='$password';");

if ($result->num_rows > 0) {
  if($row = $result->fetch_assoc()) {
    header("Location: /current_final/create_form.html");
  }
}
else {
  header("Location: /current_final/error.php");
}
$conn->close();

?>