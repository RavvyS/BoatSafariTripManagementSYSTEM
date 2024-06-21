<html>

<head>
   <link rel="stylesheet" href="reservation.css">

</head>
<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require "connect.php";


$res_ID = $_POST["res_ID"];
$firstName = $_POST["firstName"];
$nic = $_POST["nic"];
$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];
$checkIn = $_POST["checkIn"];
$checkOut = $_POST["checkOut"];
$noOfAdults = $_POST["noOfAdults"];
$noOfChildren = $_POST["noOfChildren"];
$remark = $_POST["remark"];

if (empty($firstName) || empty($nic) || empty($email) || empty($phoneNo) || empty($checkIn) || empty($checkOut) || empty($noOfAdults) || empty($noOfChildren) || empty($remark)) {
   echo "All Requiured";
} else {
   $sql = "UPDATE finalResservation SET firstName='$firstName', nic='$nic', email='$email', phoneNo='$phoneNo', checkIn='$checkIn', checkOut='$checkOut', noOfAdults='$noOfAdults', noOfChildren='$noOfChildren', remark='$remark' WHERE res_ID='$res_ID'";

   if ($con->query($sql)) {
      echo 'updated';
      header("Location:adminDashboard.php?content=manageBooking");
   } else {
      echo 'not updated';
   }
}
$con->close();
?>


<body>

   <form action="update_reservation.php" method="post">
      <h1>Update Reservation</h1>
      <input type="hidden" name="res_ID">
      First Name : <input type="text" name="firstName" value="<?php echo $firstName; ?>"><br>
      Packages : <input type="text" name="nic" value="<?php echo $nic; ?>"><br>
      E-mail : <input type="text" name="email" value="<?php echo $email; ?>"><br>
      Phone Number : <input type="text" name="phoneNo" value="<?php echo $phoneNo; ?>"><br>
      Check-In : <input type="date" name="checkIn" value="<?php echo $checkIn; ?>"><br>
      Check-Out : <input type="date" name="checkOut" value="<?php echo $checkOut; ?>"><br>
      No of adults : <input type="number" name="noOfAdults" value="<?php echo $noOfAdults; ?>"><br>
      No of children : <input type="number" name="noOfChildren" value="<?php echo $noOfChildren; ?>"><br>
      Remark : <input type="text" name="remark" value="<?php echo $remark; ?>"><br>
      <input type="submit">
   </form>
</body>

</html>