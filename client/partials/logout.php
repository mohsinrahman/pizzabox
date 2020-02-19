<?php
session_start();
	if(isset($_SESSION['FirstName'])){
        unset($_SESSION['FirstName']);
        unset($_SESSION['isAdmin']);
          $logout = "Logout";
        return  ($logout) ;
	}
?>