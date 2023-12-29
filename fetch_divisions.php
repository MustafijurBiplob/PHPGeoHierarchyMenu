<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "blood";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM divisions";
$result = $conn->query($sql);

$options = '<option value="">Select Division</option>';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['id'] . '">' . $row['division_name'] . '</option>';
}

echo $options;
$conn->close();
?>
