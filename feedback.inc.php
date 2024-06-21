<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Include the database connection file
    include_once 'connect.php';

    // Retrieve form data
    $username = $_POST['userN'];
    $email = $_POST['userE'];
    $contact = $_POST['userTP'];
    $feedback = $_POST['userFeedback'];

    // Prepare an SQL statement to insert feedback into the database
    $sql = "INSERT INTO feedback (userN, userE, userTP, userFeedback) VALUES (?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = mysqli_stmt_init($con);

    // Check if the SQL statement can be prepared
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // If statement cannot be prepared, display an error message
        header("Location: feedback.php?error=sqlerror");
        exit();
    } else {
        // Bind the parameters to the SQL statement
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $contact, $feedback);
        
        // Execute the SQL statement
        mysqli_stmt_execute($stmt);

        // Close the statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($con);

        // Redirect the user back to the feedback page with a success message
        echo "<script>alert('Feedback submitted successfully');</script>"; // Add this line to display the alert
        echo "<script>window.location.href = 'feedback.php';</script>";
        exit();
    }
} else {
    // If the form is not submitted, redirect the user back to the feedback page
    header("Location: feedback.php");
    exit();
}
?>
