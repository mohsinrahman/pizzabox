<?php
session_start();
include("../../includes/product.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method){
   if($method == 'POST') {
   
//if(isset($_POST["login"])){
    /* echo json_encode($_POST["email"]); */
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $productCategory = $_POST["productCategory"];
    $productDescription = $_POST["productDescription"];
    $productCategoryId = $_POST["categoryId"];
    $productUnitInStock = $_POST["productUnitsInStock"];
    $productImage = $_POST["productImage"];
    echo json_encode($productName);
        
    //exit($productId . '=' .  $productName . '=' .  $productPrice . '=' .  $productCategory . '=' .  $productDescription); 
 
         $p = new Product();      
        $newProduct = $p->addProduct($productCategoryId,$productName,$productDescription,$productPrice,$productCategory, $productUnitInStock, $productImage); 
        //echo json_encode($userLogin);
        exit (json_encode($newProduct)); 
        

        }
   /*       else {
            echo json_encode("Not a User.");
        } */
   // } 
    }



?>