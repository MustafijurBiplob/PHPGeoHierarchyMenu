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

    // Sanitize input
    $divisionId = $conn->real_escape_string($_POST['division_id']);

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM districts WHERE division_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $divisionId);
    $stmt->execute();

    $result = $stmt->get_result();

    $options = '<option value="">Select District</option>';
    
    // Store district IDs to ensure uniqueness
    $selectedDistricts = array();

    while ($row = $result->fetch_assoc()) {
        // Check against the array to ensure uniqueness
        if (!in_array($row['id'], $selectedDistricts)) {
            $options .= '<option value="' . $row['id'] . '">' . $row['district_name'] . '</option>';
            $selectedDistricts[] = $row['id'];
        }
    }

    echo $options;

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request";
}
?>
