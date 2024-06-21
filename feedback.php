<?php
    include_once 'header.php';
    ?>

<br>
<div class="containersignup">
    <h1>Feedback</h1>
    <form class="form-container" action="feedback.inc.php" method="POST">

      <label for="name">Your full name</label>
      <input type="text" id="name" name="userN" placeholder="Name" required>
      
      <label for="e-mail">Your e-mail</label>
      <input type="text" id="e-mail" name="userE" placeholder="email"required>

      <label for="contact-number">Contact number</label>
      <input type="tel" id="contact_number" name="userTP" maxlength="10" required>
      
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
