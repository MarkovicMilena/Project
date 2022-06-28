<?php
session_start();

if (!empty($_SESSION['cart'])) {
  if (!empty($_POST['remove'])) {
    foreach ($_POST['remove'] as $productId) {
      $key = array_search($productId, $_SESSION['cart']);
      unset($_SESSION['cart'][$key]);
      // foreach ($_SESSION['cart'] as $key => $item) {
      //   // $productDataPasred = explode(",", $productData);
      //   if ($item == $productId) {
      //     unset($_SESSION['cart'][$key]);
      //   }
      // }
    }
  }
}

header("Location: ./controler-shopping-cart.php");
