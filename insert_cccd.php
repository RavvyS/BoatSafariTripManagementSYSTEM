<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'connect.php';


$cardNo = $_POST["cardNo"];
$nameOnCard = $_POST["nameOnCard"];
$CVV = $_POST["CVV"];
$expire_date = $_POST["expire_date"];

$sql = "INSERT INTO online( cardNo, nameOnCard, CVV, expire_date) VALUES ('$cardNo','$nameOnCard','$CVV','$expire_date')";
$insert_message = "";
if ($con->query($sql)) {
    $insert_message = "Payment has been reserved successfully!";
} else {
    $insert_message = "error" . $con->error;
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
</body>
</html>