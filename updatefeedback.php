<?php
require 'connect.php';
if (!isset($_GET['fID'])) {
    die("Invalid User Id");
 }

$id = $_GET['fID'];
$sql = "SELECT * FROM feedback WHERE fID = $id";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($result);
if (!isset($_GET['fID'])) {
    die("Invalid User Id");
 }
if (isset($_POST['submit'])) {
    $fullname = $_POST['userN'];
    $email = $_POST['userE'];
    $tp = $_POST['userTP'];
    $feedback = $_POST['userFeedback'];
    $status = $_POST['statuss'];

    $sql = "UPDATE feedback  
            SET userN = '$fullname', userE = '$email', userTP = '$tp', userFeedback = '$feedback', statuss = '$status' 
            WHERE fID = '$id' ";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('User with ID: $id updated successfully');</script>";
        header('location: managerDashboard.php?content=managefeedbacks');
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
    <title>Update Feedback Details</title>
    <link rel="stylesheet" type="text/css" href="styles/usercommon.css">
    <script src="script.js"></script>
</head>

<body>

    <div class="userForm">
        <h2>Update Feedback Details</h2>
        <form method="post">
        <label for="name">User's full name</label>
      <input type="text" id="name" name="userN" value="<?php echo $rows['userN']; ?>" required>
      
      <label for="e-mail">User's e-mail</label>
      <input type="text" id="e-mail" name="userE" value="<?php echo $rows['userE']; ?>" required>

      <label for="contact-number">User's Contact number</label>
      <input type="tel" id="contact_number" name="userTP" maxlength="10" value="<?php echo $rows['userTP']; ?>" required>
      
      <label for="feedback">User's Feedback</label>
<input type="text" id="feedback" name="userFeedback" value="<?php echo $rows['userFeedback']; ?>" required></textarea>

        <label for="contact-number">Status</label>
      <input type="text" id="contact_number" name="statuss" value="<?php echo $rows['statuss']; ?>"  required>
            <div class="submit-btn">
                <button type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>

</body>

</html>
