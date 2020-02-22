<?php
session_start();
include("../includes/order.class.php");
$order = new Order();
if(isset($_SESSION["ID"])){
    $id=$_SESSION["ID"];

$id=$_SESSION["ID"];
$method = isset($_SERVER['REQUEST_METHOD']);
if(isset($_POST["order"])){
    $street=$_POST['street'];
    $postcode=$_POST['postcode'];
    $city=$_POST['city'];
    $mobile=$_POST['mobile'];
    $datetimepicker= $_POST['datetimepicker'];  
    $selectShipping=$_POST['selectShipping'] ;
 
    $id=$_SESSION["ID"];
    

    $products=$_SESSION["cart"];
    
    $order->newOrder($id,$selectShipping,$datetimepicker,$products,$street,$postcode,$city,$mobile);

   unset($_SESSION['cart']);
   unset($_SESSION["qty"]);
   unset($_SESSION["total"]);

}}
else echo false;
?>