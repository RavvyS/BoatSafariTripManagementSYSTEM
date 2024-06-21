<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bank = $_POST["bank"];
    $branch = $_POST["branch"];
    $remark = $_POST["remark"];

    if (isset($_FILES["choosefile"])) {
        $filename = $_FILES["choosefile"]["name"];
        $tempfile = $_FILES["choosefile"]["tmp_name"];
        $folder = "bankSlip/" . basename($filename);

        // Validate file type if needed
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $fileExtension = pathinfo($folder, PATHINFO_EXTENSION);
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='text-center'>Invalid file type</h4>
                </div>";
            exit;
        }

        if (move_uploaded_file($tempfile, $folder)) {
            $sql = "INSERT INTO `bank`(`bank`, `branch`, `uploadSlip`, `remark`) VALUES (?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssss", $bank, $branch, $folder, $remark);
            $insert_message = "";
            if ($stmt->execute()) {
                $insert_message ="Uploaded Successfully";
                       
            } else {
                $insert_message ="Failed to upload image";      
            }
        } else {
            $insert_message ="Failed to move uploaded file";
            
        }
    } else {
        $insert_message ="File upload field is missing or empty";
      
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reservation Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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