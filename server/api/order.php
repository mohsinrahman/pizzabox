<?php
session_start();
include("../includes/order.class.php");
$order = new Order();
$method = isset($_SERVER['REQUEST_METHOD']);
if(isset($_POST["order"])){
    $street=$_POST['street'];
    $postcode=$_POST['postcode'];
    $city=$_POST['city'];
    $mobile=$_POST['mobile'];
    $datetimepicker=$_POST['datetimepicker'];
    $selectAdmin=$_POST['selectAdmin'] ;
 
    //$ID=$_SESSION["ID"]
    $products=$_SESSION["cart"];

    $order->newOrder(1,$selectAdmin,$date,$products);



}
?>