<?php
// Include the file for database connection
include 'connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve POST data
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $file_name = isset($_POST['file-name']) ? $_POST['file-name'] : '';
    $file = isset($_POST['file']) ? $_POST['file'] : '';

    try {
        // Create a new record using ORM
        $query = ORM::for_table('service_sheets')->create();
        $query->id = $id;
        $query->File_Name = $file_name;
        $query->File = $file;

        // Save the record to the database
        $query->save();

        // Check if the record was successfully saved
        if ($query) {
            header("location:add-service_sheets.php?success=true");
            exit(); // Exit to prevent further execution
        } else {
            throw new Exception("Failed to save record to the database");
        }
    } catch (Exception $e) {
        // Handle exceptions and errors
        header("location:add-service_sheets.php?error=" . urlencode($e->getMessage()));
        exit(); // Exit to prevent further execution
    }
} else {
    // If the form is not submitted
    header("location:add-service_sheets.php?error=Form submission error");
    exit(); // Exit to prevent further execution
}
?>
