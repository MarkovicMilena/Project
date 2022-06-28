<?php

session_start();
//models
require_once __DIR__ . "/models/login-model.php";


$object = new User();

if(isset($_POST['submit'])){
    
    $name = $_POST['user'];
    $pass = $_POST['pass'];

  
    $object->Login($name, $pass);

}


//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-login-page.php";


//FOOTER
require __DIR__ . "/views/_layout/footer.php";




?>




























