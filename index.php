<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdowns with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/dropdowns.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="form-group">
            <label for="division">Division:</label>
            <select id="division" class="form-control">
                <!-- Options will be populated dynamically -->
            </select>
        </div>

        <div class="form-group">
            <label for="district">District:</label>
            <select id="district" class="form-control">
                <option value="">Select District</option>
            </select>
        </div>

        <div class="form-group">
            <label for="upazila">Upazila:</label>
            <select id="upazila" class="form-control">
                <option value="">Select Upazila</option>
            </select>
        </div>
    </div>

    <script>
        // Fetch divisions on page load
        $(document).ready(function() {
            fetchDivisions();
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
