<?php
include '../actions/autoload.act.php';
include '../actions/autoload.act1.php';

// Check if all required fields are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rname'], $_POST['rprice'])) {
    // Sanitize input data
    $roomName = $_POST['rname'];
    $roomPrice = $_POST['rprice'];

    // Check if roomId is set in the $_POST array
    if (isset($_POST['roomId'])) {
        $roomId = $_POST['roomId'];
        
        // Update room details
        $admin = new Admin();
        $admin->update_room($roomName, $roomPrice, $roomId);

        // Return success message
        echo json_encode(['success' => true, 'message' => 'Room updated successfully']);
        exit;
    } else {
        // Return error message if roomId is not set
        echo json_encode(['success' => false, 'message' => 'Room ID is required']);
        exit;
    }
} else {
    // Return error message if required fields are not set
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}


