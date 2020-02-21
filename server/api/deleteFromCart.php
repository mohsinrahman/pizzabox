<?php 
session_start();
if ( isset($_GET["delete"]) )
{
    
$i = $_GET["delete"];

$_SESSION["qty"][$i]=0;
echo true;

}
?>