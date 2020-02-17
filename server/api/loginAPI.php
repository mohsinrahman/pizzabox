
<?php
//session_start();
include_once("../server/includes/user.class.php");
$user = new User();
//$i=$_POST["email"];
//echo "<script>console.log('.$i.' );</script>";
//echo  $_SESSION["id"];

if(isset($_POST["login"])){
    if (empty($_SESSION["id"])){
    echo "<script>console.log('log in' );</script>";
    $email = $_POST["email"];
    $password = $_POST["password"];
$userInfo=$user->logInUser($email,$password);
//echo "<script>console.log('User info: " .json_encode( $userInfo ). "' );</script>";
//echo var_dump($userInfo);
if($userInfo){
    $_SESSION["id"]=$userInfo[0]["id"];
    $_SESSION["username"]=$userInfo[0]["firstName"];
    echo $_SESSION["username"];
}
//else echo "<script>console.log('WRONG!' );</script>";

}
else echo "logged in alredy!sign out first";
}

?>