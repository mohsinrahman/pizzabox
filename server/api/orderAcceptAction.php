<?php
session_start();
include("../includes/order.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method){
   if($method == 'POST') {
   
    $action = $_POST["selectedOption"];
    $actionId = $_POST["id"];
    
        $orderAcceptAction = new Order();      
        $adminOrderAcceptAction = $orderAcceptAction->orderStatus($action,$actionId); 
        exit (json_encode($adminOrderAcceptAction));
        

        }

    }



?>