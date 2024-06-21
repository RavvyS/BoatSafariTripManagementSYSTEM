<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski Trip</title>
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
        <div class="package-header">Ski Trip</div>
        
        <div class="package-info">
            <span>Destination:</span> Aspen, Colorado
        </div>
        
        <div class="package-info">
            <span>Duration:</span> 4 days
        </div>
        
        <div class="package-info">
            <span>Price:</span> $350
        </div>
        
        <br>

        <div class="package-description">
            <ul>
                <li>Kick off your adventure with an exhilarating off-road safari excursion through rugged terrain and pristine wilderness.</li><br>
                <li>Whether you're a beginner or an expert, the USA offers a wide range of ski resorts catering to all skill levels. </li><br>
                <li>Skiing in the USA means immersing yourself in some of the most breathtaking landscapes on Earth.  </li><br>
                <li>The USA is home to some of the most renowned ski resorts in the world, known for their impeccable grooming, top-notch amenities, and luxurious accommodations.</li><br>
                <li>Ski trips in the USA aren't just for hardcore enthusiasts—many resorts offer a plethora of family-friendly activities, such as sledding, ice skating, and snowshoeing. </li><br>
            </ul>

        </div>
        
        <div class="package-footer">
        <a href="unregreservation.php"><button>Book Now</button></a>

        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>