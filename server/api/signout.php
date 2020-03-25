<?php 
session_start();

 echo $_SERVER['REQUEST_METHOD'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
       
        unset($_SESSION['FirstName']);
        unset($_SESSION['isAdmin']);
        unset($_SESSION['uId']);
        echo true;
    }
    else{
        echo "false";
    }
   
   ?>   