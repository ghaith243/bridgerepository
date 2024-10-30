<?php
include '../actions/autoload.act.php';
include '../actions/autoload.act1.php';

// Check if all required fields are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pname'], $_POST['pprice'])) {
    // Sanitize input data
    $pensionName = $_POST['pname'];
    $pensionPrice = $_POST['pprice'];

    // Check if roomId is set in the $_POST array
    if (isset($_POST['penId'])) {
        $penId = $_POST['penId'];
        
        // Update room details
        $admin = new Admin();
        $admin->update_pension($pensionName, $pensionPrice, $penId);

        // Return success message
        echo json_encode(['success' => true, 'message' => 'Pension updated successfully']);
        exit;
    } else {
        // Return error message if roomId is not set
        echo json_encode(['success' => false, 'message' => 'pension ID is required']);
        exit;
    }
} else {
    // Return error message if required fields are not set
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}


