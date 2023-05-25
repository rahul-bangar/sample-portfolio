<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the feedback ID and status are provided
    if (isset($_POST['feedbackId']) && isset($_POST['status'])) {
        $feedbackId = $_POST['feedbackId'];
        $status = $_POST['status'];

        // Update the status in the database
        $sql = "UPDATE feedback SET status = '$status' WHERE id = '$feedbackId'";
        $result = mysqli_query($db, $sql);

        if ($result) {
            // Status updated successfully
            echo "Status updated successfully";
        } else {
            // Error occurred while updating status
            echo "Error occurred while updating status";
        }
    } else {
        // Invalid parameters
        echo "Invalid parameters";
    }
} else {
    // Invalid request method
    echo "Invalid request method";
}

// Close the database connection
mysqli_close($db);
?>
