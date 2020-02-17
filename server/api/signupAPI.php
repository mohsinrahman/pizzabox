<?php
//session_start(); 
//unset($_SESSION['username']);// TO UNSET USER FOR TESTING
include_once("../server/includes/user.class.php");
$user = new User();

    if (isset($_POST['regUser'])) {
      if(empty($_SESSION['id'])){
        //echo "HERE";
        $firstName=$_POST['fname'];
        $lastName=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email']; 
        $password=$_POST['password'];
        
        
        //$isAdmin=$_POST['admin']; //TO SEND VALUE THROUGH CHECK BOX
       // if (!empty($_POST['admin'])){
        //    $isAdmin="Maybe";
       // }
        //else
         $isAdmin="No";

    $id=3;// NOW RESET MANUALY 
    $user->insertNewUser($id, $firstName, $lastName, $phone, $email, $password, $isAdmin);
    $_SESSION['username'] =$firstName;
    $_SESSION['id'] =$id;
    echo $_SESSION['username'];
    header("Location: index.php");
    exit;
    }
   } 
   
//}
?>