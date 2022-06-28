<?php
session_start();
if(empty($_SESSION['cart'])) {
    header("Location: ./controler-products.php");
}
require_once __DIR__ . "/models/products-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";

$items = getShoppingCart();

//HEADER
require __DIR__ . "/views/_layout/header.php";

// PAGE
require __DIR__ . "/views/main-shopping-cart.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";






















?>