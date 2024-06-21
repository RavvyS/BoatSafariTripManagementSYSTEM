<?php
    include_once 'headerreguser.php';
    ?>

<br>
<div class="containersignup">
    <h1>Feedback</h1>
    <form class="form-container" action="feedback.inc.php" method="POST">

      <label for="name">Your full name</label>
      <input type="text" id="name" name="userN" placeholder="Name" value="<?php echo isset($_SESSION['userN']) ? $_SESSION['userN'] : ''; ?>" required style="width:60%;">
      
      <label for="e-mail">Your e-mail</label>
      <input type="text" id="e-mail" name="userE" placeholder="email"required style="width:60%;" value="<?php echo isset($_SESSION['userE']) ? $_SESSION['userE'] : ''; ?>">

      <label for="contact-number">Contact number</label>
      <input type="tel" id="contact_number" name="userTP" maxlength="10" required style="width:60%;" value="<?php echo isset($_SESSION['userTP']) ? $_SESSION['userTP'] : ''; ?>">
      
      <label for="feedback">Your Feedback</label>
<textarea id="feedback" name="userFeedback" rows="4" cols="50" style="border-radius:8px ;border:0;" placeholder="  Enter your feedback here..."required></textarea>

	  <br>
	  <br>

      
      <input type="submit" value="Submit Feedback" class="submit feedback" style="width: 340px;">
    </form>
  </div>
<br>
<?php
    include_once 'footer.php';
    ?>  
