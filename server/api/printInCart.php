<?php
session_start();
include("../includes/product.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);
$pr=new Product();
$prArr=$pr->getAllProducts();

if($method){
   if($method == 'GET') {
    $cartArr=[];
   
       $c=count($prArr);
       
        for ($i=1; $i<$c; $i++) {

          if ($_SESSION["qty"][$i]!=0){
              $a=["qty"=>($_SESSION["qty"][$i])];
              //var_dump($prArr[$i]);
              $v=$prArr[$i-1];
            // array_unshift( $v,["qty"=>($_SESSION["qty"][$i])]);
            $v=["qty"=>($_SESSION["qty"][$i])]+$v;
              //$cartArr.array_merge($v);
              array_push($cartArr, $v);
              //print_r($cartArr);

            }
        }
        $_SESSION["cart"]=$cartArr;
       echo json_encode( $cartArr);
       // json_encode( $_SESSION["cart"]);
   }
}
?>