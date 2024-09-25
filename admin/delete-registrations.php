<?php
include 'connect.php';

// Check if ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redirect to an error page or display an error message
    header("Location: all-registrations.php");
    exit();
}

// Sanitize the ID to prevent SQL injection
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if ($id === false) {
    // Invalid ID provided
    header("Location: all-registrations.php");
    exit();
}

// Prepare and execute the delete query
$result = $db->prepare("DELETE FROM event_register WHERE id = :post_id");
$result->bindParam(':post_id', $id, PDO::PARAM_INT);
if ($result->execute()) {
    // Redirect to a success page
    header("Location: all-registrations.php");
    exit();
} else {
    // Handle the case where deletion fails
    // You can redirect to an error page or display an error message
    header("Location: all-registrations.php");
    exit();
}
?>
