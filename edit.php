<?php
include_once 'headerreguser.php';
include_once 'connect.php'; // Include your database connection file here

// Check if user is logged in
if(!isset($_SESSION['userID'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['userN'];
    $email = $_POST['userE'];
    $phone_number = $_POST['userTP'];
    $userPWD = $_POST['userPWD'];
    $userPWDR = $_POST['userPWDR'];
    
    // Perform validation if needed
    
    // Update user information in the database
    $userID = $_SESSION['userID'];
    $query = "UPDATE registration SET userN=?, userE=?, userTP=?, userPWD=?, userPWDR=?";
    $params = array($username, $email, $phone_number, $userPWD, $userPWDR);
    
    
    $query .= " WHERE userID=?";
    $params[] = $userID;

    // Prepare and execute the query
    $stmt = mysqli_prepare($con, $query);
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, str_repeat("s", count($params)), ...$params);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Update session variables with new user information
            $_SESSION['userN'] = $username;
            $_SESSION['userE'] = $email;
            $_SESSION['userTP'] = $phone_number;
            $_SESSION['userPWD'] = $userPWD;
            $_SESSION['userPWDR'] = $userPWDR;

            echo "Account updated successfully.";
            header('Location: reguserhome.php');
        } else {
            echo "Error updating account: " . mysqli_stmt_error($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($con);
    }
    
}
$con->close();

?>

<?php
include_once 'footer.php' 
?>
