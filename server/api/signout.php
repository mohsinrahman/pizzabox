<?php 
session_start();

 echo $_SERVER['REQUEST_METHOD'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
       
        unset($_SESSION['FirstName']);
        unset($_SESSION['isAdmin']);
        echo true;
    }
    else{
        echo "false";
    }
   
   ?>   