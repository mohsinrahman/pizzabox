<?php
session_start();
include("../includes/user.class.php");
$user = new User();

if(isset($_POST["signup"])){
        $firstName=$_POST['fname'];
        $lastName=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email']; 
        $password=$_POST['password'];
        $isAd=(bool)$_POST['admin'];
        
       if ($isA){
            $isAdmin="Yes";
       }
        else{
         $isAdmin="No";}
    
    $last=$user->insertNewUser( $isAdmin, $firstName, $lastName, $email, $password);
    $_SESSION["ID"]=$last;
    $_SESSION["isAdmin"]=$isAdmin;
    $_SESSION['FirstName']=$firstName;
   echo true;
    
    }
    else echo "Not POST";

?>