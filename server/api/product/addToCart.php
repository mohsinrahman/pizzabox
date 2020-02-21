<?php
session_start();
//echo  var_dump($_POST["add"]);

if ( isset($_POST["add"]) )
{
$id = (int)$_POST["add"];

$qty = $_SESSION["qty"][$id] + 1;


$_SESSION["qty"][$id] = $qty;


}

//echo var_dump($_SESSION["qty"]);
?>