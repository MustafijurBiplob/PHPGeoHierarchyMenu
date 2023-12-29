<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "blood";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['district_id'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $districtId = $_POST['district_id'];
    $sql = "SELECT * FROM upazilas WHERE district_id = $districtId";
    $result = $conn->query($sql);

    $options = '<option value="">Select Upazila</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['id'] . '">' . $row['upazila_name'] . '</option>';
    }

    echo $options;
    $conn->close();
} else {
    echo "Invalid request";
}
?>
