<?php
session_start();
include("../includes/user.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method){
   if($method == 'POST') {
   

    $newsletter_email = $_POST["newsletter_email"];
    $newsletter_name = $_POST["newsletter_name"];
    

 
        $user = new User();      
        $userNewsletterEmail = $user->newsLetterEmail($newsletter_email,$newsletter_name); 
        exit (json_encode($userNewsletterEmail));
        

        }

    }



?>