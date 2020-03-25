<?php
session_start();
include("../includes/user.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'GET') {
        
        
        $singleCustomer = new User();
{
                    $listSingleCustomer = $singleCustomer->getSingleCustomerOrders();
                    echo json_encode($listSingleCustomer);
                }
        }
         else {
            echo json_encode("No List.");
        }
    }


?>