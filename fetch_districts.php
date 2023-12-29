<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "blood";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['division_id'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Sanitize input
        $divisionId = filter_var($_POST['division_id'], FILTER_SANITIZE_NUMBER_INT);

        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM districts WHERE division_id = :divisionId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':divisionId', $divisionId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $options = '<option value="">Select District</option>';

        // Store district IDs to ensure uniqueness
        $selectedDistricts = array();

        foreach ($result as $row) {
            // Check against the array to ensure uniqueness
            if (!in_array($row['id'], $selectedDistricts)) {
                $options .= '<option value="' . $row['id'] . '">' . $row['district_name'] . '</option>';
                $selectedDistricts[] = $row['id'];
            }
        }

        echo $options;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    } finally {
        $conn = null; // Close the connection
    }
} else {
    echo "Invalid request";
}
?>
