<?php
session_start();
include("../../includes/product.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'GET') {
        
        
        $product = new Product();
        
        /*if(isset($_GET['Category'])) {
                 
                $catergoryChoosen = $_GET['Category'];
                if($catergoryChoosen == "Pizza" || $catergoryChoosen == "Side dish" || $catergoryChoosen == "Dessert" || $catergoryChoosen == "Drink"){

                    $products = $product->getAllOfThisCategory($catergoryChoosen);
                    echo json_encode($products);
                }else{ */
                    $allProducts = $product->getAllProducts();
                    echo json_encode($allProducts);
                //}

        
        

        } else {
            echo json_encode("No category.");
        }
    }
//}

?>