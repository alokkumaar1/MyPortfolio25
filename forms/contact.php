<?php
header('Content-Type: application/json');

// Simple response for testing - remove this after testing
echo json_encode(['success' => true]);
exit;

/* Actual implementation would be:
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

// Send email logic here
echo json_encode(['success' => true]);
*/
?>