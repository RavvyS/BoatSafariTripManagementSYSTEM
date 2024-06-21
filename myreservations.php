<?php
include_once 'headerreguser.php';

require_once("connect.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
// Check if userID is provided in the URL
if (isset($_GET['userID'])) {
    $userID = $_GET['userID'];

    // Fetch specific reservations based on userID
    $sql = "SELECT res_ID, firstName, NIC, email, phoneNo, checkIn, checkOut, noOfAdults, noOfChildren, remark FROM finalResservation WHERE userID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<center><h1 style='color: blue;'>My Reservations</h1></center>";
        echo "<table style='width: 80%; border-collapse: collapse; margin: 20px auto;'>";
        echo "<tr>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Name</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Package</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Email</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Phone Number</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Check-In</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Check-Out</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>No of Adults</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>No of Children</th>";
        echo "<th style='background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;'>Remark</th>";
        echo "</tr>";

        // Fetch and display reservation data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["firstName"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["NIC"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["email"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["phoneNo"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["checkIn"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["checkOut"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["noOfAdults"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["noOfChildren"] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: left;'>" . $row["remark"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<center>No reservations found for this user.</center>";
    }
} else {
    echo "<center>User ID not provided.</center>";
}

$con->close();
echo "<br>";
include_once 'footer.php';
?>
