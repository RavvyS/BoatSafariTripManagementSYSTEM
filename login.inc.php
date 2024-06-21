<?php

include_once 'header.php';


$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';

    $email = $_POST['userE'];
    $password = $_POST['userPWD'];
   
    
    $sql="SELECT * FROM registration WHERE userE = '$email' AND userPWD='$password' ";
    $result = mysqli_query($con, $sql);

    $user = $result->fetch_assoc();
    if ($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           //echo "<div class='success-message'>Login Succesfull</div>";
           $login = 1;
           session_start();
           $_SESSION['userID']=$user["userID"];
           $_SESSION['userE']=$user["userE"]; 
           $_SESSION['userN']=$user["userN"];  
           $_SESSION['userTP']=$user["userTP"];  
           $_SESSION['userPWD']=$user["userPWD"]; 
           $_SESSION['userPWDR']=$user["userPWDR"];  

           header('location:reguserhome.php');
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
$con->close();


    include_once 'footer.php';
    
?>
