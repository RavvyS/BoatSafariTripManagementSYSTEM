<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Package</title>
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
        <div class="package-header">Adventure Packages</div>
        
        <div class="package-info">
            <span>Destination:</span> Hawaii, USA
        </div>
        
        <div class="package-info">
            <span>Duration:</span> 7 days
        </div>
        
        <div class="package-info">
            <span>Price:</span> $150
        </div>
        
        <br>

        <div class="package-description">
            <ul>
                <li>Kick off your adventure with an exhilarating off-road safari excursion through rugged terrain and pristine wilderness.</li><br>
                <li>lake to the water and experience the thrill of river rafting on exhilarating rapids.</li><br>
                <li>Set sail on a wildlife safari cruise and encounter the incredible diversity of flora and fauna that call the riverbanks home.</li><br>
                <li>Lace up your boots and venture into the heart of the wilderness with a guided nature hike. Led by knowledgeable naturalists, explore scenic trails, learn about the local ecosystem, and discover hidden treasures along the way. </li><br>
                <li>Extend your adventure with an overnight camping experience under the stars. Set up camp along the riverbanks and immerse yourself in the tranquility of the wilderness. </li><br>
                <li>Keep your eyes peeled for wildlife sightings and immerse yourself in the sights and sounds of nature.</li><br>
            </ul>

        </div>
        
        <div class="package-footer">
            <a href="unregreservation.php"><button>Book Now</button></a>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>