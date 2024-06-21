<?php
require_once("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Check if the ID is provided
    if (isset($_POST['res_ID'])) {
        // Sanitize the ID to prevent SQL injection
        $res_ID = mysqli_real_escape_string($con, $_POST['res_ID']);
        
        // Prepare a delete statement
        $sql = "DELETE FROM finalResservation WHERE res_ID = $res_ID";
        
        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully
            <br><br>
            <button style='padding: 5px 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer; text-decoration: none; display: inline-block;'><a href='adminDashboard.php?content=manageBooking' style='color: inherit; text-decoration: none;'>Back to read</a></button>
            ";
        } else {
            echo "Error deleting record: " . $con->error;
        }
    } else {
        echo "ID not provided.";
    }
} else {
    echo "Invalid request.";
}

$con->close();
?>
