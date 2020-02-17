<?php
session_start();
include("../includes/user.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method){
   if($method == 'POST') {
   
//if(isset($_POST["login"])){
    /* echo json_encode($_POST["email"]); */
    $email = $_POST["email"];
    $password = $_POST["password"];
    $isAdmin = $_POST["isAdmin"];

    
   /*  exit($email . '=' .  $password); */
 
        $user = new User();      
        $userLogin = $user->logInUser($email,$password,$isAdmin); 
        //echo json_encode($userLogin);
        exit (json_encode($userLogin));
        

        }
   /*       else {
            echo json_encode("Not a User.");
        } */
   // } 
    }
/* 
    <?php

if(isset($_POST["login"])){
     echo json_encode($_POST["email"]); 
    $email = $_POST["email"];
    $password = $_POST["password"];

    exit($email . '=' .  $password);
}
?> */


?>