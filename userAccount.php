<?php
include_once 'headerreguser.php';
?>

<div class="profile-top">
    <h1>Welcome User to Wildwaves Safari</h1>
    <span><u>My Settings</u></span>
    <br>
    <div class="para-box">
        <div>
            <p>Manage your user account information</p>
        </div>
    </div>
</div>

<div class="containeredit">
    <h1>Update Account</h1>
    <center><img src="images/update.png" alt="" style="width:150px; height:150px;" /></center>
    <form class="form-container" action="edit.php" method="POST">

        <label for="name">Enter your full name:</label>
        <input type="text" id="name" name="userN" value="<?php echo isset($_SESSION['userN']) ? $_SESSION['userN'] : ''; ?>" required>

        <label for="e-mail">Enter your e-mail:</label>
        <input type="text" id="e-mail" name="userE" value="<?php echo isset($_SESSION['userE']) ? $_SESSION['userE'] : ''; ?>" required>

        <label for="contact-number">Enter your contact number:</label>
        <input type="tel" id="contact_number" name="userTP" value="<?php echo isset($_SESSION['userTP']) ? $_SESSION['userTP'] : ''; ?>" maxlength="10" required>

        <label>Update new password :</label>
        <input name="userPWD" id="password" type="password" onkeyup='check();' required />

        <label>Confirm new password:</label>
        <input type="password" name="userPWDR" id="confirm_password" onkeyup='check();' required />
        <span id='message'></span>

        <input type="submit" value="Update Account" class="center-align">
    </form>
<br>
    <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone!');" >
            <button type="submit" class="delete" style="display: block; margin: 0 auto; text-align: center;">Delete Account</button>
            </form>
</div>
<br>
<?php
include_once 'footer.php';
?>
