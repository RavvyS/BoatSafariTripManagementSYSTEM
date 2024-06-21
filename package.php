<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link href="styles/package.css" rel="stylesheet" type="text/css">
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

    <div class="package-container">
        <!-- Top Image Section -->
        <div class="decription">
            <center><h3>About Our Rides</h3></center><br>
           <center> <p>Welcome to the heart of adventure! At Wildwaves safari, 
                we offer an array of exhilarating rides designed 
                to immerse you in the natural wonders of our world. 
                From leisurely cruises along scenic waterways 
                to thrilling expeditions deep into the wilderness, 
                our rides promise unforgettable experiences for explorers of all ages.
                Experience the magic of twilight with our Sunset Serenity ride. 
                Set sail as the golden hues of the setting sun paint the sky 
                in a mesmerizing display of colors. Drift along tranquil waters, 
                basking in the serenity of nature's evening symphony. It's the perfect way to unwind
                and capture breathtaking moments as day transitions into night.
            </p></center><br>
        </div>
        <h2>Packages</h2><br>
        
        <div class="card-containeri">
    <?php
    // Assuming $conn is your database connection

    // Fetching details for the first card
    $sql = "SELECT * FROM package WHERE packageId = 1";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package1.php"><button>See More</button></a>
        </div>
        <?php
    }

    // Fetching details for the second card
    $sql = "SELECT * FROM package WHERE packageId = 2";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package2.php"><button>See More</button></a>
        </div>
        <?php
    }

    // Fetching details for the third card
    $sql = "SELECT * FROM package WHERE packageId = 3";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package3.php"><button>See More</button></a>
        </div>
        <?php
    }

    // Fetching details for the fourth card
    $sql = "SELECT * FROM package WHERE packageId = 4";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package4.php"><button>See More</button></a>
        </div>
        
        <?php
    }

    // Fetching details for the fifth card
    $sql = "SELECT * FROM package WHERE packageId = 5";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package5.php"><button>See More</button></a>
        </div>
        <?php
    }

    // Fetching details for the sixth card
    $sql = "SELECT * FROM package WHERE packageId = 12";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package6.php"><button>See More</button></a>
        </div>
        <?php
    }

        // Fetching details for the seventh card
        $sql = "SELECT * FROM package WHERE packageId = 13";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $package = $result->fetch_assoc();
            ?>
            <div class="card">
                <h1><?php echo $package['packageName']; ?></h1>
                <p class="price">$<?php echo $package['price']; ?></p>
                <p><?php echo $package['description']; ?></p>
                <a href="package6.php"><button>See More</button></a>
            </div>
            <?php
        }

            // Fetching details for the eightth card
    $sql = "SELECT * FROM package WHERE packageId = 14";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $package = $result->fetch_assoc();
        ?>
        <div class="card">
            <h1><?php echo $package['packageName']; ?></h1>
            <p class="price">$<?php echo $package['price']; ?></p>
            <p><?php echo $package['description']; ?></p>
            <a href="package6.php"><button>See More</button></a>
        </div>
        <?php
    }
    ?>
</div>

    </div>

    <?php
    include_once 'footer.php';
    ?>
