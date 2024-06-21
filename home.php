<?php
require 'connect.php';
// get user count
$sql = 'SELECT COUNT(*) AS user_count FROM registration';
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
//get reservation count
$sql = 'SELECT COUNT(*) AS reservation_count FROM finalresservation';
$result = $con->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    $reservationCount = $row['reservation_count'];
} else {
    $reservationCount = 0;
}

$sql = "SELECT * FROM administrator WHERE aId = 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  $admin = $result->fetch_assoc();
} else {
  echo "No admin found.";
}

?>

<div class="profile-container">
  <div class="additional-text">
    <h3>Admin Dashboard</h3>
  </div>
  <div class="right-content">
    <div class="profile-info">
      <i class="fas fa-user" id="profile-img"></i>
      <div class="profile-name">Administrator</div>
    </div>
  </div>
</div>



<h2 id="message">Welcome to the Admin Dashboard </h2>
<div class="adminprofile-box" style="
max-width: 400px;
  margin: 0 auto;
  border: 1px solid #ccc;
  border-radius: 15px;
  padding: 30px;
  background-color: #f9f9f9;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 50px;">
<center>
  <h2>Hello <?php echo $admin['aID']; ?></h2>
  <p>Name: <?php echo $admin['adminName']; ?></p>
  <p>Email: <?php echo $admin['auserE']; ?></p>
  <p>Password: <?php echo $admin['auserPWD']; ?></p>
</center>
<br>
</div>
<p id="para">
  This is where you can monitor activities, access important information, and manage different parts of the system.
  To explore the various features, use the navigation menu.
</p>



<div class="card-container">
  <div class="card">
    <div class="info">
      <h2>USERS</h2>
      <p><?php echo $userCount; ?></p>
    </div>
    <div class="icon">
      <i class="fas fa-users"></i>
    </div>
  </div>

  <div class="card">
    <div class="info">
      <h2>BOOKINGS</h2>
      <p><?php echo $reservationCount; ?></p>
    </div>
    <div class="icon">
      <i class="fas fa-clipboard-list"></i>
    </div>
  </div>

  <div class="card">
    <div class="info">
      <h2>PACKAGES</h2>
      <p><?php echo $packageCount ?></p>
    </div>
    <div class="icon">
      <i class="fas fa-box"></i>
    </div>
  </div>