<?php
session_start();
include("../includes/user.class.php");

if(isset($_POST["login"])){
  
    $email = $_POST["email"];
    $password = $_POST["password"];
    $isAdmin = $_POST["isAdmin"];

    

 
        $user = new User();      
        $userLogin = $user->logInUser($email,$password,$isAdmin); 
        if ( $userLogin!=false){
        $_SESSION['FirstName']=  $userLogin->FirstName; 
        $_SESSION['isAdmin']=  $userLogin->isAdmin; 
        $_SESSION["ID"]=$userLogin->Id;
        }
        echo json_encode($userLogin);
        

        }
   


?>