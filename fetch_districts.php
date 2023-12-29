<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "blood";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['division_id'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $divisionId = $_POST['division_id'];
    $sql = "SELECT * FROM districts WHERE division_id = $divisionId";
    $result = $conn->query($sql);

    $options = '<option value="">Select District</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['id'] . '">' . $row['district_name'] . '</option>';
    }

    echo $options;
    $conn->close();
} else {
    echo "Invalid request";
}
?>
