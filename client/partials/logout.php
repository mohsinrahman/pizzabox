<?php
session_start();

	if(isset($_SESSION['FirstName'])){
        unset($_SESSION['FirstName']);
        unset($_SESSION['isAdmin']);
        unset($_SESSION['uId']);
          $logout = "Logout";
          echo ($logout) ;
	}
?>