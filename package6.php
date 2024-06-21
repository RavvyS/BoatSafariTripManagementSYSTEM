<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Expedition Package</title>
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
        <div class="package-header">Jungle Expedition Package</div>
        
        <div class="package-info">
            <span>Destination:</span> Everglades National Park, Florida
        </div>
        
        <div class="package-info">
            <span>Duration:</span> 5 days
        </div>
        
        <div class="package-info">
            <span>Price:</span>$300
        </div>
        
        <br>

        <div class="package-description">
            <ul>
                <li>Embark on a journey deep into some of America's most pristine and untamed wilderness areas.</li><br>
                <li>Engage in a variety of thrilling outdoor activities that allow you to fully immerse yourself in the wilderness.</li><br>
                <li>Get up close and personal with a fascinating array of wildlife species that call these wilderness areas home.</li><br>
                <li>Learn about the unique ecosystems and natural history of the areas you're exploring through guided tours, ranger-led programs, and interpretive exhibits.  </li><br>
                <li>Experience the thrill of venturing into remote and untamed landscapes where the sights, sounds, and smells of nature surround you at every turn.</li><br>
                <li>A jungle expedition in the USA offers more than just adventure—it's a journey of self-discovery, connection, and exploration.</li><br>
            </ul>

        </div>
        
        <div class="package-footer">
        <a href="unregreservation.php"><button>Book Now</button></a>

        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>