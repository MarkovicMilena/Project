<?php
session_start();
//models
require_once __DIR__ . "/models/products-model.php";
require_once __DIR__ . "/models/user-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";

// $productId = $_GET['page'];

$productId = null;
$quantity = null;
$submited = false;
$systemErrors = [];
 $systemErrors = '';
   $name= '';
   $last_name= '';
   $email='';
   $city= '';
   $phone='';
   $street= '';
   $zip= '';
   $message='';
   $rights = '';


if(!empty($_POST['product_id'])) {
    $productId = $_POST['product_id'];
}

if(!empty($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
}

if (is_null($productId) || is_null($quantity)) {
  die("You have must choose quantity!");
}


// VALIDACIJA NARUCIVANJA
// VALIDACIJA NARUCIVANJA
// VALIDACIJA NARUCIVANJA

// (string)

if(isset($_POST['buy']) && $_POST['buy'] == "yes")
 {
    // NAME
    $name =  $_POST['name'];
     $name = trim($name);
    if(empty($name)) {
        $systemErrors  = "Field name is required!";
    }
    // LAST NAME
    $last_name =  $_POST['last_name'];
     $last_name = trim($last_name);
    if(empty($last_name)) {
        $systemErrors = "Field last name is required!";
    }
    // EMAIL
    $email =  $_POST['email'];
     $email = trim($email);
    if(empty($email)) {
        $systemErrors = "Field email is required!";
    }
    if(empty($systemErrors['email']) && !str_contains($email, "@")) {
        $systemErrors = "Mail must include @!";
    }
    // CITY
    $city = $_POST['city'];
    $city = trim($city);
    if(empty($city)) {
        $systemErrors = "Field city is required!";
    }
    // PHONE
    $phone =  $_POST['phone'];
     $phone = trim($phone);
    if(empty($phone)) {
        $systemErrors = "Field phone is required!";
    }
    if(empty($systemErrors['phone']) && !isValidPhone($phone)) {
        $systemErrors = "Phone number is not valid!";
    }
    // STREET
    $street =  $_POST['street'];
    $street = trim($street);
    // ZIP
    $zip =  $_POST['zip'];
     $zip = trim($zip);
    if(empty($zip)) {
        $systemErrors = "Field zip is required!";
    }
    // MESSAGE
    $message =  $_POST['message'];
     $message = trim($message);
    // RIGHTS
    $rights =  $_POST['rights'];
    if(empty($rights)) {
        $systemErrors = "You must check your rights!";
    }

    if(empty($systemErrors)) {
        $submited = true;
    }
}


 $product = getOneProductById($productId);
$collectedItems = getShoppingCart();

//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-checkout-page.php";


//FOOTER
require __DIR__ . "/views/_layout/footer.php";
































?>