<?php
// Start session to access session variables
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userID'])) {
    // Redirect the user to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Include database connection
require_once 'connect.php';

// Retrieve user ID from session
$userID = $_SESSION['userID'];

// Retrieve user's reservation details from the reservation table
$sql = "SELECT * FROM finalresservation WHERE res_ID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();

// Check if any reservations found
if ($result->num_rows > 0) {
    // Display reservation details
    while ($row = $result->fetch_assoc()) {
        echo "Reservation ID: " . $row['res_ID'] . "<br>";
        echo "Check-in Date: " . $row['checkIn'] . "<br>";
        echo "Check-out Date: " . $row['checkOut'] . "<br>";
        // Display other reservation details as needed
        echo "<br>";
    }
} else {
    echo "No reservations found.";
}

// Close database connection
$stmt->close();
$con->close();
?>
