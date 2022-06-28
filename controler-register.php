<?php
session_start();
//models
require_once __DIR__ . "/models/register-model.php";

//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-register-page.php";


//FOOTER
require __DIR__ . "/views/_layout/footer.php";



?>