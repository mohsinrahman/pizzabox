<?php
session_start();
include("../../includes/product.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'GET') {
        
        
        $product = new Product();

     {
                    $allProducts = $product->getAllProducts();
                    echo json_encode($allProducts);
                }

        
        

        }
         else {
            echo json_encode("No category.");
        }
    }


?>