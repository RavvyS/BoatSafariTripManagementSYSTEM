<?php
include_once 'headerreguser.php';

?>
<h1>Welcome 
    <?php echo $_SESSION['userE']; ?>
</h1>

<br>

<div class="containeredit">
    <h1>My Profile</h1>
    <center><img src="images/update.png" alt="" style="width:150px; height:150px;" /></center>
    <form class="form-container" action="edit.php" method="POST">

        <label for="name">Your Full Name:</label>
        <div class ="upcont" style="padding: 8px;border-radius: 5px;text-align: center;background-color: #ffffff;backdrop-filter: blur(50px);"><b><?php echo isset($_SESSION['userN']) ? $_SESSION['userN'] : ''; ?></b></div>

        <label for="e-mail">Your e-mail:</label>
        <div class ="upcont" style="padding: 8px;border-radius: 5px;text-align: center;background-color: #ffffff;backdrop-filter: blur(50px);"><b><?php echo isset($_SESSION['userE']) ? $_SESSION['userE'] : ''; ?></b></div>

        <label for="contact-number">Your contact number:</label>
        <div class ="upcont" style="padding: 8px;border-radius: 5px;text-align: center;background-color: #ffffff;backdrop-filter: blur(50px);"><b><?php echo isset($_SESSION['userTP']) ? $_SESSION['userTP'] : ''; ?></b></div>
    </form>
</div>
<br>
<center>
    <a href="myreservations.php?userID=<?php echo $_SESSION['userID']; ?>">
        <button style="padding: 10px; border-radius: 10px; border: none; background-color: #4CAF50; color: white;">My Reservations</button>
    </a>
</center>

<br>
<br>
<?php
include_once 'footer.php';
?>
