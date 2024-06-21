<?php
include_once 'connect.php'; 


session_start();
if (!isset($_SESSION['userID'])) {
    
    header('Location: login.php');
    exit(); 
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Delete the user account from the database
    $userID = $_SESSION['userID'];
    $sql = "DELETE FROM registration WHERE userID = '$userID'";
    if (mysqli_query($con, $sql)) {
        session_unset();
        session_destroy();
        
        header('Location: login.php');
        exit(); 
    } else {
        
        echo "Error: " . mysqli_error($con);
    }
} else {
    
    header('Location: login.php');
    exit(); 


}
$con->close();

?>
