
<?php
include_once 'header.php';

$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';

    $email = $_POST['auserE'];
    $password = $_POST['auserPWD'];
   
    
    $sql="SELECT * FROM administrator WHERE auserE = '$email' AND auserPWD='$password' ";
    $result = mysqli_query($con, $sql);

    $user = $result->fetch_assoc();
    if ($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           //echo "<div class='success-message'>Login Succesfull</div>";
           $login = 1;
           session_start();
           $_SESSION['aID']=$user["aID"];
           $_SESSION['auserE']=$user["auserE"]; 
           $_SESSION['auserPWD']=$user["auserPWD"]; 

           header('location:adminDashboard.php');
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
