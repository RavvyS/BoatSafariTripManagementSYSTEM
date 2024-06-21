<?php
session_start();
if (!isset($_SESSION['userE'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/terms.css">
    <link rel="stylesheet" href="styles/privacy.css">
    <link rel="stylesheet" href="styles/signup.css">
    <link rel="stylesheet" href="styles/reservation.css">
    <link rel="stylesheet" type="text/css" href="styles/userAccount.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>

        .success-message {
            color: green;
            font-weight: bold;
            background-color: #dff0d8;
            padding: 10px;
            border: 1px solid #3c763d;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .error-message {
            color: red;
            font-weight: bold;
            background-color: #e37474;
            padding: 10px;
            border: 1px solid #fa0202;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        
        </style>
    <script
      src="https://kit.fontawesome.com/78ca3a369e.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script> 
</head>
<body> 
<!--NAVIGATION BAR -->
<header>
        <div class="headerLogo">
            <img src="images/logo.png">
        </div>
        <nav>
            <div class="logo"> Wild<span>Waves</span></div>
            <ul class="menu">
                <li><button><a href="reguserindex.php">Home</a></button></li>
                <li><button><a href="package.php">Packages</a></button></li>
                <div class="dropdown">
                    <button class="dropbtn"><span>AboutUs</span></button>
                    <div class="dropdown-content">
                      <a href="about.php">About Us</a>
                      <a href="privacy.php">Privacy</a>
                      <a href="terms.php">Terms</a>
                    </div>
                  </div>
                  
                <li><button><a href="reservation.php">Reservations</a></button></li>
                <li><button><a href="#">ContactUs</a></button></li>
                <li><button><a href="reguserhome.php">MyProfile</a></button></li>

            </ul>
            
            <form action="userAccount.php" method="GET">
            <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>">
            <button type="submit" class="search" style="color: white; margin-left:230px;">Update</button>
            </form>
            <button class="search" ><a href="logout.php"> Logout </a></button>
            
        </nav>
    </header>
 