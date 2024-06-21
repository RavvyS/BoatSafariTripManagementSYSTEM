<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Cruise</title>
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
        <div class="package-header"> Luxury Cruise</div>
        
        <div class="package-info">
            <span>Destination:</span> Pacific Coast
        </div>
        
        <div class="package-info">
            <span>Duration:</span> 10 days
        </div>
        
        <div class="package-info">
            <span>Price:</span> $250
        </div>
        
        <br>

        <div class="package-description">
            <ul>
                <li>Luxury cruise ships in the USA boast spacious and opulent accommodations, often featuring plush bedding, marble bathrooms, and private balconies offering breathtaking ocean views. .</li><br>
                <li>Indulge your palate with gourmet cuisine prepared by world-class chefs using the finest ingredients. </li><br>
                <li>From the moment you step on board, you'll be treated to impeccable service by a dedicated staff trained to anticipate your every need. </li><br>
                <li>Indulge your senses with a beachside dining experience like no other. </li><br>
                <li>Enjoy regional specialties, fresh seafood, and decadent desserts paired with fine wines and craft cocktails.</li><br>
                <li>Pamper yourself with exclusive amenities and upscale facilities designed to enhance your relaxation and enjoyment.</li><br>

        </div>
        
        <div class="package-footer">
        <a href="unregreservation.php"><button>Book Now</button></a>

        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>