<?php
    //$content = isset($_GET['content']) ? $_GET['content'] : 'home';

    if(isset($_GET['content'])) {
        $content = $_GET['content'];
    } else {
        $content = 'home';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manager Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles/adminhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="adminDashboard-container">
        <div class="sidenav">

            <ul>
                <li><i class="fa fa-tachometer"></i><a href="?content=home">&nbsp;Dashboard</a></li>
                <li><i class="fa fa-users" aria-hidden="true"></i><a
                        href="?content=feedbacks">&nbsp;Feedbacks</a></li>
                
                <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
        </div>


        <div class="content">
            <?php
        switch ($content) {
            case 'feedbacks':
                include 'managefeedbacks.php';
                break;
            default:
                include 'mhome.php';
                break;
        }
        ?>
        </div>

    </div>


</body>

</html>