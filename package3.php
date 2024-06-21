<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Exploration</title>
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
        <div class="package-header">City Exploration</div>
        
        <div class="package-info">
            <span>Destination:</span>San Francisco, California
        </div>
        
        <div class="package-info">
            <span>Duration:</span> 2 days
        </div>
        
        <div class="package-info">
            <span>Price:</span>$200
        </div>
        
        <br>

        <div class="package-description">
            <ul>
                <li>Begin your city exploration with a captivating riverfront tour that offers a fresh perspective on iconic landmarks and urban landscapes.</li><br>
                <li>Capture the essence of the city with our cityscape photography session led by professional photographers.</li><br>
                <li>Step ashore and explore the city's cultural and historical treasures with our guided shore excursions.</li><br>
                <li>Experience the magic of the city at night with our city lights cruise.  </li><br>
                <li>Immerse yourself in the city's vibrant cultural scene with live performances and entertainment. </li><br>
                <li> Cruise along bustling waterfronts, passing by historic buildings, modern skyscrapers, and vibrant neighborhoods. </li><br>
            </ul>

        </div>
        
        <div class="package-footer">
        <a href="unregreservation.php"><button>Book Now</button></a>

        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>