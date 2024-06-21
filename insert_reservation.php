<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'connect.php';

$res_ID = $_POST["res_ID"];
$uID= $_POST["userID"];
$firstName = $_POST["firstName"];
$nic = $_POST["nic"];
$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];
$checkIn = $_POST["checkIn"];
$checkOut = $_POST["checkOut"];
$noOfAdults = $_POST["noOfAdults"];
$noOfChildren = $_POST["noOfChildren"];
$remark = $_POST["remark"];


$sql = "INSERT INTO finalResservation (firstName, nic, email, phoneNo, checkIn, checkOut, noOfAdults, noOfChildren, remark, userID) 
        VALUES ('$firstName', '$nic', '$email', '$phoneNo', '$checkIn', '$checkOut', '$noOfAdults', '$noOfChildren', '$remark','$uID')";


$insert_message = ""; // Initialize the insert message variable

if ($con->query($sql)) {
    $insert_message = "Reserved successfully"; // Set insert message if insert successful
    // Set JavaScript variable to hold the success message
    echo "<script>var successMessage = 'Reserved successfully';</script>";
} else {
    $insert_message = "Error: " . $con->error; // Set error message if insert fails
}

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservation Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('back.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .message {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="message"><?php echo $insert_message; ?></div>

    <script>
        // Display the success message as an alert
        alert(successMessage);
        // Redirect to the home page after displaying the alert
        window.location.href = "reguserindex.php";
    </script>
</body>
</html>
