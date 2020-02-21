<?php 
session_start();
if ( isset($_GET["delete"]) )
{
    
$i = $_GET["delete"];
//echo $i;
$_SESSION["qty"][$i]=0;


}
?>