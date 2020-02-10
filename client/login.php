<?php

if(isset($_POST["login"])){
    /* echo json_encode($_POST["email"]); */
    $email = $_POST["email"];
    $password = $_POST["password"];

    exit($email . '=' .  $password);
}