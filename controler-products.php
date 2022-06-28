<?php

// require_once __DIR__ . "/models/products-model.php";

// $filter = "";
// $sort = "";

// if(!empty($_GET['option'])) {
//     $filter = $_GET['option'];
// }

// $products = getAllProducts();

// if($filter != "") {
//     $products = filteredProducts($products, $filter);
// }

session_start();
require_once __DIR__ . "/models/products-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";

$products = getAvailableProducts();

$term = "";
$sort = "";

if(!empty($_GET['term'])) {
    $term = $_GET['term'];
}

if(!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}


if($term != "") {
    $products = filteredProducts($products, $term);
}

if($sort != "") {
    $products = sortProductBy($products, $sort);
}

// SHOPPING CART (SESSION)
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $_SESSION['cart'][] = $_POST['product_id'];
}




//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-products-page.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";
































?>