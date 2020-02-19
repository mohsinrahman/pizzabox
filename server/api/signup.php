<?php
session_start();
include("../includes/user.class.php");
$user = new User();
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName=$_POST['fname'];
        $lastName=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email']; 
        $password=$_POST['password'];
        
        
        //$isAdmin=$_POST['admin'];
       // if (!empty($_POST['admin'])){
        //    $isAdmin="Maybe";
       // }
        //else
         $isAdmin="No";

    
    $user->insertNewUser( $isAdmin, $firstName, $lastName, $email, $password);
   echo "done";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
    }
    else echo "Not POST";
}
?>