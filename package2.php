<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beach Getaway Packages</title>
    <link href="styles/packagetypes.css" rel="stylesheet" type="text/css">
    <link href="styles/index.css" rel="stylesheet" type="text/css">
    <link href="styles/footer.css" rel="stylesheet" type="text/css">


</head>
<body>
<header>
        <div class="headerLogo">
            <img src="images/logo.png">
        </div>
        <nav>
            <div class="logo"> Wild<span>Waves</span></div>
            <div style="margin-left:150px;">
            <ul class="menu" >
                
                    <li><button><a href="index.php">Home</a></button></li>
                    <li><button><a href="package.php">Packages</a></button></li>
                    <div class="dropdown">
                    <button class="dropbtn"><span>AboutUs</span></button>
                    <div class="dropdown-content">
                      <a href="about.php">About Us</a>
                      <a href="privacy.php">Privacy</a>
                      <a href="terms.php">Terms</a>
                    </div>
                  </div>
                  
                    <li><button><a href="unregreservation.php">Reservations</a></button></li>
                    <li><button><a href="contactus.php">ContactUs</a></button></li>
                
            </ul>
    </div>
            <button class="search"><a href="loginportal.php"> Login </a></button>
        </nav>
    </header>
    <div class="package">
        <div class="package-header">Beach Getaway Packages</div>
        
        <div class="package-info">
            <span>Destination:</span>Cannon Beach, Oregon
        </div>
        
        <div class="package-info">
            <span>Duration:</span> 5 days
        </div>
        
        <div class="package-info">
            <span>Price:</span> $400
        </div>
        
        <br>

        <div class="package-description">
            <ul>
                <li>Keep your camera ready to capture stunning vistas and perhaps even glimpse dolphins frolicking in the waves.</li><br>
                <li>Hop ashore and explore remote islands teeming with natural beauty and charm. Embark on guided nature walks, snorkel in vibrant coral reefs, or simply bask in the serenity of secluded beaches.</li><br>
                <li>Whether you're a thrill-seeker or a laid-back lounger, our beach activities cater to all preferences. </li><br>
                <li>Indulge your senses with a beachside dining experience like no other. </li><br>
                <li>Conclude your beach getaway with a magical sunset serenade.</li><br>
                <li>Our culinary team crafts mouthwatering menus inspired by local flavors, ensuring a memorable dining experience that complements the beauty of your surroundings.</li><br>

        </div>
        
        <div class="package-footer">
        <a href="unregreservation.php"><button>Book Now</button></a>
        
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>