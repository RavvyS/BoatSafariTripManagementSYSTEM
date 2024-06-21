<?php
require 'connect.php';

$id = $_GET['userId'];
$sql = "SELECT * FROM registration WHERE userID = $id";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $fullname = $_POST['userN'];
    $email = $_POST['userE'];
    $tp = $_POST['userTP'];
    $password = $_POST['userPWD'];
    $cpassword = $_POST['userPWDR'];

    $sql = "UPDATE registration  
            SET userN = '$fullname', userE = '$email', userTP = '$tp', userPWD = '$password', userPWDR = '$cpassword' 
            WHERE userID = '$id' ";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('User with ID: $id updated successfully');</script>";
        header('location: adminDashboard.php?content=manageUser');
    } else {
        echo "<script>alert('Failed to update user with ID: $id');</script>";
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update User Details</title>
    <link rel="stylesheet" type="text/css" href="styles/usercommon.css">
    <script src="script.js"></script>
</head>

<body>

    <div class="userForm">
        <h2>Update User Details</h2>
        <form method="post">
            <label for="name">Enter your full name:</label>
            <input type="text" id="name" name="userN" value="<?php echo $rows['userN']; ?>" required>

            <label for="e-mail">Enter your e-mail:</label>
            <input type="text" id="e-mail" name="userE" value="<?php echo $rows['userE']; ?>" required>

            <label for="contact-number">Enter your contact number:</label>
            <input type="tel" id="contact_number" name="userTP" value="<?php echo $rows['userTP']; ?>" maxlength="10" required>

            <label>Create a password :</label>
            <input name="userPWD" id="password" type="password" onkeyup='check();'  />

            <label>Confirm password:</label>
            <input type="password" name="userPWDR" id="confirm_password" onkeyup='check();'   />
            <span id='message'></span>

            <div class="submit-btn">
                <button type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>

</body>

</html>
