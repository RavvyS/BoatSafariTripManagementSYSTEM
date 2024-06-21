<?php
require 'connect.php';
?>

<?php 
    if (!isset($_GET['fID'])) {
       die("Invalid User Id");
    }
    $userId   = $_GET['fID'];

    $sql = "DELETE  FROM feedback WHERE fID='{$userId}'";
    $res = $con->query($sql) ;

    if($res){
        echo "Feedback {$userId} deleted successfully";
        echo "<script>setTimeout(() => { window.location.href = 'managerDashboard.php?content=managefeedbacks'; }, 1000);</script>";
        
    }else{
        echo "<script>alert('Error deleting user.');</script>";
    }
    
?>