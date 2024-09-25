<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database fields
    $first_name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $last_name = isset($_POST['lname']) ? $_POST['lname'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : ''; 
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contact_number = isset($_POST['contact']) ? $_POST['contact'] : '';
    $event_type = isset($_POST['event_type']) ? $_POST['event_type'] : '';
    $confirmation = isset($_POST['confirmation']) ? 'Yes' : 'No'; 

    // Checks if required fields are not empty
    if (empty($first_name) || empty($last_name) || empty($gender) || empty($email) || empty($contact_number) || empty($event_type)) {
        echo "All fields are required.";
        exit();
    }

    // Connect to the database
    $servername = "localhost";
    $dbname = "qrzyqcto_church_db";
    $username = "qrzyqcto_MUN1Z";
    $password = "Mun1z**/01/****";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Set the timezone to East Africa Time (EAT)
       date_default_timezone_set('Africa/Nairobi');

        // Get current date and time in EAT 
        $submission_time = date('Y-m-d H:i:s');

        // SQL statement
        $stmt = $conn->prepare("INSERT INTO event_register (fname, lname, email, gender, contact, event_title, confirmation, submitted) VALUES (:fname, :lname, :email, :gender, :contact, :event_type, :confirmation, :submitted)");
        
        // Bind parameters
        $stmt->bindParam(':fname', $first_name);
        $stmt->bindParam(':lname', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':contact', $contact_number);
        $stmt->bindParam(':event_title', $event_title); 
        $stmt->bindParam(':confirmation', $confirmation);
        $stmt->bindParam(':submitted', $submission_time);
        

        // Execute the statement
        $stmt->execute();

        // Redirect to a success page
        header("Location: events.php");
        exit();
    } catch(PDOException $e) {
        // Handle database connection error
        echo "Connection failed: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
