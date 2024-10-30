<?php
include '../actions/autoload.act.php';
include '../actions/autoload.act1.php';

// Check if all required fields are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rrname'], $_POST['rrprice'])) {
    // Sanitize input data
    $roomName = $_POST['rrname'];
    $roomPrice = $_POST['rrprice'];
    
    // Add room details
    $admin = new Admin();
    $admin->add_room($roomName, $roomPrice);

    // Return success message
    echo json_encode(['success' => true, 'message' => 'Room added successfully']);
    exit;
} else {
    // Return error message if required fields are not set
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}
?>
