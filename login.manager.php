<?php

$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';

    $email = $_POST['managerE'];
    $password = $_POST['managerPWD'];
   
    
    $sql="SELECT * FROM manager WHERE managerE = '$email' AND managerPWD='$password' ";
    $result = mysqli_query($con, $sql);

    $user = $result->fetch_assoc();
    if ($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           //echo "<div class='success-message'>Login Succesfull</div>";
           $login = 1;
           session_start();
           $_SESSION['mID']=$user["mID"];
           $_SESSION['managerE']=$user["managerE"]; 
           $_SESSION['managerPWD']=$user["managerPWD"]; 

           header('location:managerDashboard.php');
        }else{

           // echo "Invalid email Or Password ";
           $invalid=1;
           
        }
        if($login){
            echo"<div class='success-message'>Login Succesful</div>";
            
          }
          
          if($invalid){
            echo"<div class='error-message'>Incorrect User email or Password</div>";
          }
}

}   


include_once 'footer.php'
?>
