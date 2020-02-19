<?php
session_start();
include("../includes/user.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method){
   if($method == 'POST') {
   
//if(isset($_POST["login"])){
    /* echo json_encode($_POST["email"]); */
    $newsletter_email = $_POST["newsletter_email"];
    
  /*  exit($email); */
 
        $user = new User();      
        $userNewsletterEmail = $user->newsLetterEmail($newsletter_email); 
        //echo json_encode($userLogin);
        exit (json_encode($userNewsletterEmail));
        

        }

    }



?>