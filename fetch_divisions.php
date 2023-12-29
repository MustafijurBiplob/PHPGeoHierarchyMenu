<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "blood";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming $userInput is the user-supplied input
$userInput = $_POST['user_input'];

// Sanitize user input
$userInput = $conn->real_escape_string($userInput);

// Use prepared statement to prevent SQL injection
$sql = "SELECT * FROM divisions WHERE some_column = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userInput); // Assuming some_column is a string, adjust the type accordingly
$stmt->execute();

$result = $stmt->get_result();

$options = '<option value="">Select Division</option>';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['id'] . '">' . $row['division_name'] . '</option>';
}

echo $options;

$stmt->close();
$conn->close();
?>
