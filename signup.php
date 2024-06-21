<?php
include_once 'header.php';

?>
<br>
<div class="containersignup">
    <h1>Create Account</h1>
    <form class="form-container" action="signup.inc.php" method="POST">

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
      
      <input type="submit" value="Create Account" class="center-align" style="width:250px;">
    </form>
    <p class="message">Already have an account? <a class="log" href="login.php">Log in</a></p>
  </div>
<br>
<?php
include_once 'footer.php' 
?>