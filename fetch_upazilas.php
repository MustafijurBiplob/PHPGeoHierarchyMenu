<?php
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "blood";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['district_id'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $districtId = filter_var($_POST['district_id'], FILTER_SANITIZE_NUMBER_INT);

        $sql = "SELECT * FROM upazilas WHERE district_id = :districtId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':districtId', $districtId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $options = '<option value="">Select Upazila</option>';
        foreach ($result as $row) {
            $options .= '<option value="' . $row['id'] . '">' . $row['upazila_name'] . '</option>';
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
