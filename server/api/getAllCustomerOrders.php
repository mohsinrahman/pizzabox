<?php
session_start();
include("../includes/order.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'GET') {
        
        
        $AllCustomer = new Order();
{
                    $listAllCustomer = $AllCustomer->getAllCustomerOrders();
                     echo json_encode($listAllCustomer); 
                }
        }
         else {
            echo json_encode("No List.");
        }
    }


?>