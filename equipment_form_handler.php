<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $first_name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $last_name = isset($_POST['lname']) ? $_POST['lname'] : '';
    $ID_NO = isset($_POST['id_no']) ? $_POST['id_no'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contact_number = isset($_POST['contact']) ? $_POST['contact'] : '';
    $department = isset($_POST['department']) ? $_POST['department'] : '';
    $reason = isset($_POST['reason']) ? $_POST['reason'] : '';
    $Requested_equipment = isset($_POST['equipment_list']) ? $_POST['equipment_list'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';
    $Time_Taken = isset($_POST['ttaken']) ? date('H:i', strtotime($_POST['ttaken'])) : '';
    $Return_Time = isset($_POST['returnt']) ? date('H:i', strtotime($_POST['returnt'])) : '';
    $Relevant_info = isset($_POST['rinfo']) ? $_POST['rinfo'] : '';
    $tc = isset($_POST['tc']) ? 1 : 0;

    // Validating form data
    if (empty($first_name) || empty($last_name) || empty($ID_NO) || empty($email) || empty($contact_number) || empty($department) || empty($reason) || empty($Requested_equipment) || empty($date) || empty($location) || empty($Time_Taken) || empty($Return_Time) || empty($Relevant_info) || empty($tc)) {
        echo "All fields are required.";
        exit();
    }
    
    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit();
    }

    // Connect to the database
    $servername = "localhost";
    $dbname = "qrzyqcto_church_db";
    $username = "qrzyqcto_MUN1Z";
    $password = "Mun1z**/01/****";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Set the timezone to East Africa Time (EAT)
        date_default_timezone_set('Africa/Nairobi');

        // Get current date and time in EAT 
        $submission_time = date('Y-m-d H:i:s');

        // Check if the equipment is already booked on the same date
        $stmt_check_date = $conn->prepare("SELECT * FROM EQ_requests WHERE date = :date");
        $stmt_check_date->bindParam(':date', $date);
        $stmt_check_date->execute();
        $existing_booking_date = $stmt_check_date->fetch();
        
        if ($existing_booking_date) {
            echo '<script>
                    alert("The equipment has already been booked for the selected date. Please choose a different date.");
                    window.history.back(); // Go back to the previous page
                  </script>';
            exit();
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO EQ_requests (fname, lname, id_no, email, contact, department, reason, equipment_list, date, location, ttaken, returnt, rinfo, tc, submitted) VALUES (:fname, :lname, :id_no, :email, :contact, :department, :reason, :equipment_list, :date, :location, :ttaken, :returnt, :rinfo, :tc, :submitted)");
        
        // Bind parameters
        $stmt->bindParam(':fname', $first_name);
        $stmt->bindParam(':lname', $last_name);
        $stmt->bindParam(':id_no', $ID_NO);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact', $contact_number);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':reason', $reason);
        $stmt->bindParam(':equipment_list', $Requested_equipment); 
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':ttaken', $Time_Taken);
        $stmt->bindParam(':returnt', $Return_Time);
        $stmt->bindParam(':rinfo', $Relevant_info);
        $stmt->bindParam(':tc', $tc);
        $stmt->bindParam(':submitted', $submission_time);
        
        // Execute the statement
        $stmt->execute();

        // Redirect after successful insertion
        header("Location: our-committee.php");
        exit();
    } catch(PDOException $e) {
        // Handle connection errors
        echo "Connection failed: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
}
?>
