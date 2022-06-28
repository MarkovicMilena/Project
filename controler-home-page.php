<?php
session_start();
require_once __DIR__ . "/models/products-model.php";



//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-home-page.php";


//FOOTER
require __DIR__ . "/views/_layout/footer.php";
































?>