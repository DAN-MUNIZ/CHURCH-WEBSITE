<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database fields
    $first_name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $last_name = isset($_POST['lname']) ? $_POST['lname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contact_number = isset($_POST['contact']) ? $_POST['contact'] : '';
    $request = isset($_POST['thanksgiving']) ? $_POST['thanksgiving'] : '';
    $anonymous = isset($_POST['anonymous']) ? 'Yes' : 'No'; 

    // Check if required fields are not empty
    if (empty($first_name) || empty($last_name) || empty($email) || empty($contact_number) || empty($request)) {
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

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO thanksgiving (fname, lname, email, contact, thanksgiving, anonymous, submitted) VALUES (:fname, :lname, :email, :contact, :thanksgiving, :anonymous, :submitted)");
        
        // Bind parameters
        $stmt->bindParam(':fname', $first_name);
        $stmt->bindParam(':lname', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact', $contact_number);
        $stmt->bindParam(':thanksgiving', $request);
        $stmt->bindParam(':anonymous', $anonymous);
        $stmt->bindParam(':submitted', $submission_time);
        
        // Execute the statement
        $stmt->execute();

        // Redirect to a success page
        header("Location: programmes.php");
        exit();
    } catch(PDOException $e) {
        // Handle database connection error
        echo "Connection failed: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
