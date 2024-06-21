<?php
    include_once 'header.php';
    ?>
    
    <div class="content"><div class="container">
    <div class="content-inner"> 
	
      <header><b>Welcome Admin</b></header>
      <p>Login to continue...</p><br>
      <form method="POST" action="login.admin.php">
        <div class="field">
          <input name="auserE" id="email" type="text" placeholder="Enter your email" />
        </div>

        <div class="field">
          <input name="auserPWD" type="password" id="password" placeholder="Password" required>
        </div>

        <div class="field">
          <input name="submit" type="submit" value="Login" class="center-align" />
        </div>

        <div class="forgot">
          <a href="#">Forgot password?</a>
        </div>
      </form>
    </div>
    </div>
    </div>
  <br>
  <?php
    include_once 'footer.php';
    ?>