<?php
require 'connect.php';
// get user count
$sql = 'SELECT COUNT(*) AS user_count FROM feedback';
$result = $con->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    $userCount = $row['user_count'];
} else {
    $userCount = 0;
}


//get packages count
$sql = 'SELECT COUNT(*) AS package_count FROM package';
$result = $con->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    $packageCount = $row['package_count'];
} else {
    $packageCount = 0;
}
?>

<div class="profile-container">
  <div class="additional-text">
    <h3>Manager Dashboard</h3>
  </div>
  <div class="right-content">
    <div class="profile-info">
      <i class="fas fa-user" id="profile-img"></i>
      <div class="profile-name">Manager</div>
    </div>
  </div>
</div>



<h2 id="message">Welcome to the  Dashboard </h2>
<div class="images">
  <img src="images/update.png" alt="Image">
</div>
<p id="para">
  This is where you can monitor activities, access important information, and manage different parts of the system.
  To explore the various features, use the navigation menu.
</p>
<center>
<div class="fullcontainer">
<center>
<div class="card-container">
  <div class="card">
     <div class="info">
        <h2>Feedbacks</h2>
        <p><?php echo $userCount; ?></p>
     </div>
        <div class="icon">
      <i class="fas fa-users"></i>
    </div>
  </div>

 
  </div>
</center>
</div>
</center>