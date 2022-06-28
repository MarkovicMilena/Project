<?php
session_start();
require_once __DIR__ . "/models/products-model.php";

// $systemMessage = "PRODUCT NOT FOUND !";

// if(empty($_GET['page'])) {
//     die($systemMessage);
// }
// $productId = $_GET['page'];

// $product = getOneProductById($productId);
// $relatedProducts = getRelatedProducs($product);

// if(!$product) {
//     die($systemMessage);
// }

$productId = null;

if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
    $product = getOneProductById($productId);
    $relatedProducts = getRelatedProducs($product);
}


//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
if($productId) {
require __DIR__ . "/views/main-single-product.php";
} else {
    require __DIR__ . "/views/main-page-not-found.php";
}

//FOOTER
require __DIR__ . "/views/_layout/footer.php";


























?>