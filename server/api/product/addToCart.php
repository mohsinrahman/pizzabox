<?php
session_start();

if ( isset($_POST["add"]) )
{
$id = (int)$_POST["add"];

$qty = $_SESSION["qty"][$id] + 1;


$_SESSION["qty"][$id] = $qty;

echo true;
}

?>