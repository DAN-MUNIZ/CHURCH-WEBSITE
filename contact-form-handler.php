<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
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


        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO feedback (name, email, message, submitted) VALUES (:name, :email, :message, :submitted)");

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':submitted', $submission_time);

        // Execute the statement
        $stmt->execute();

        echo "Your feedback has been submitted successfully.";

    } catch(PDOException $e) {
        // Handle connection errors
        echo "Connection failed: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
}
?>
