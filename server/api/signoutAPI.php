<?php
// Initialize the session.
//session_start();
// Unset all of the session variables.
if(isset($_POST["signout"])){
unset($_SESSION['username']);
unset($_SESSION['id']);
// Finally, destroy the session.   
//$_SESSION = []; 
//session_destroy();

// Include URL for Login page to login again.
header("Location: index.php");
exit;
}
?>