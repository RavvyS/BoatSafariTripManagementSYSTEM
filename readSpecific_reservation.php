<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles/reservation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <?php
    require_once ("connect.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Check if userId is provided in the URL
    if (isset($_GET['res_ID'])) {
        $res_ID = $_GET['res_ID'];

        // Fetch data from DB based on userId
        $sql = "SELECT firstName, nic, email, phoneNo, checkIn, checkOut, noOfAdults, noOfChildren, remark FROM finalResservation WHERE res_ID = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $res_ID);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();


            $firstName = $row["firstName"];
            $nic = $row["nic"];
            $email = $row["email"];
            $phoneNo = $row["phoneNo"];
            $checkIn = $row["checkIn"];
            $checkOut = $row["checkOut"];
            $noOfAdults = $row["noOfAdults"];
            $noOfChildren = $row["noOfChildren"];
            $remark = $row["remark"];
        } else {
            echo "User not found";
            exit(); // or handle accordingly
        }
    } else {
        echo "User ID not provided";
        exit(); // or handle accordingly
    }

    $con->close();
    ?>

    <h1>Edit Reservation</h1>
    
    <div class="updateuserreservation" style="padding: 20px; width: 700px; border-radius: 20px; background-color: #ccc;margin-left:375px;">
        <form action="update_reservation.php" method="post">
            <center>
            <input type="hidden" name="res_ID" value="<?php echo $res_ID; ?>"><br>
          <b> First Name : <br><input type="text" name="firstName" value="<?php echo $firstName; ?>"><br><br>
          Packages :<br> <input type="text" name="nic" value="<?php echo $nic; ?>"><br><br>
            E-mail :<br> <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
            Phone Number :<br> <input type="text" name="phoneNo" value="<?php echo $phoneNo; ?>"><br><br>
            Check-In : <br><input type="date" name="checkIn" value="<?php echo $checkIn; ?>"><br><br>
            Check-Out :<br> <input type="date" name="checkOut" value="<?php echo $checkOut; ?>"><br><br>
            No of adults : <br><input type="number" name="noOfAdults" value="<?php echo $noOfAdults; ?>"><br><br>
            No of children : <br><input type="number" name="noOfChildren" value="<?php echo $noOfChildren; ?>"><br><br>
            Status :<br> <input type="text" name="remark" value="<?php echo $remark; ?>"><br><br></b>
</center>
           <center> <input type="submit" value="Update"></center>

        </form>
    </div>


</body>

</html>

