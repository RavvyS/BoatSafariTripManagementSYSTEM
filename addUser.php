<?php
require 'connect.php';
?>

<!--store user details-->
<?php

if (isset($_POST["submit"])) {
    // $id = $_POST['user-id'];
    $username = $_POST['userN'];
    $email = $_POST['userE'];
    $tp = $_POST['userTP'];
    $password = $_POST['userPWD'];
    $confirmpassword = $_POST['userPWDR'];


    // $query = "INSERT INTO  user (UID,first_name ,last_name ,address ,email , contact) VALUES ('{$id}','{$first_name}',' {$last_name}','{$address}','{$email}','{$contact}')";
    $query = "INSERT INTO registration (userN, userE, userTP, userPWD, userPWDR) VALUES ('$username', '$email', '$tp', '$password', '$confirmpassword')";
    
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script> alert('data inserted successfully')</script>";
        echo "<script>setTimeout(() => { window.location.href = 'adminDashboard.php?content=manageUser'; }, 1000);</script>";
    } else {
        echo "<script>alert('something went wrong')</script>";
    }
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User Details</title>
    <link rel="stylesheet" type="text/css" href="styles/usercommon.css">
    <script src="script.js"></script>
</head>

<body>

    <div class="userForm">
        <h2>Add User Details</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
            <!-- <label for="user-id">User ID</label>
            <input type="text" id="user-id" name="user-id" placeholder="Enter User ID" required> -->

            <label for="name">Enter your full name:</label>
      <input type="text" id="name" name="userN" required>
      
      <label for="e-mail">Enter your e-mail:</label>
      <input type="text" id="e-mail" name="userE" required>
      
      <label for="contact-number">Enter your contact number:</label>
      <input type="tel" id="contact_number" name="userTP" maxlength="10" required>
	  
      <label>Create a password :</label>
  <input name="userPWD" id="password" type="password" onkeyup='check();' />

<label>confirm password:</label>
  <input type="password" name="userPWDR" id="confirm_password"  onkeyup='check();' /> 
  <span id='message'></span>

            <div class="submit-btn">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>