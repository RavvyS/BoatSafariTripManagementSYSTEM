<?php
include_once 'header.php';

$sucess=0;
$user=0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';

    $username = $_POST['userN'];
    $email = $_POST['userE'];
    $tp = $_POST['userTP'];
    $password = $_POST['userPWD'];
    $confirmpassword = $_POST['userPWDR'];
    
    $sql="SELECT * FROM registration WHERE userE = '$email' ";
    $result = mysqli_query($con, $sql);

    if ($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo"User Already Exist";
            $user=1;
        }else{
            $sql = "INSERT INTO registration (userN, userE, userTP, userPWD, userPWDR) VALUES ('$username', '$email', '$tp', '$password', '$confirmpassword')";
            $result = mysqli_query($con, $sql);
            if($result){
                //echo "<div class='success-message'>Account Created Successfully</div> ";
                $sucess=1;
            } else{
                die(mysqli_error($con));    
        }
        }
        if($user){
            echo"<div class='error-message'>Already User Exist</div>";
          }
          
          if($sucess){
            echo "<script>alert('Account Created Successfully');";
            echo "window.location.href = 'login.php';</script>";
          }
}

}   
$con->close();


include_once 'footer.php'
?>
