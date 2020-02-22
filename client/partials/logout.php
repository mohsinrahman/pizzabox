<?php
session_start();

	if(isset($_SESSION['FirstName'])){
        unset($_SESSION['FirstName']);
        unset($_SESSION['isAdmin']);
        unset($_SESSION['ID']);
          $logout = "Logout";
          echo ($logout) ;
	}
?>