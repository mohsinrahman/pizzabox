<?php
session_start();
include("../../includes/product.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method){
   if($method == 'POST') {
   

    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $productCategory = $_POST["productCategory"];
    $productDescription = $_POST["productDescription"];
    $productCategoryId = $_POST["categoryId"];
    $productUnitInStock = $_POST["productUnitsInStock"];
    $productImage = $_POST["productImage"];
        
 
         $p = new Product();      
        $newProduct = $p->addProduct($productCategoryId,$productName,$productDescription,$productPrice,$productCategory, $productUnitInStock, $productImage); 
        exit (json_encode($newProduct)); 
        

        }
   
    }



?>