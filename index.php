<!DOCTYPE html>
<html>
<head>
    <title>Dropdowns with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch districts based on selected division
            $('#division').change(function() {
                var divisionId = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "fetch_districts.php",
                    data: { division_id: divisionId },
                    success: function(response) {
                        $('#district').html(response);
                        $('#upazila').html('<option value="">Select Upazila</option>');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Fetch upazilas based on selected district
            $('#district').change(function() {
                var districtId = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "fetch_upazilas.php",
                    data: { district_id: districtId },
                    success: function(response) {
                        $('#upazila').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
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
            $.ajax({
                type: "GET",
                url: "fetch_divisions.php",
                success: function(response) {
                    $('#division').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
