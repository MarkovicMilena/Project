<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
  <link rel="stylesheet" href="./public/theme/css/index.css">
  <title><?php   ?></title>
</head>

<body>
  <!-- START HEADER -->
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <img src="./public/theme/img/logo.png" width="150px" height="150px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="controler-home-page.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controler-products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controler-about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controler-contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controler-login-page.php">Login / </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controler-register.php">Register </a>
            </li>
          </ul>
        </div>






        <!-- Cart -->
        <div>
          <a class="nav-link position-relative" href="./controler-shopping-cart.php">
            <!-- Shopping Cart -->
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>
            <span class="position-absolute top-0 start-100 translate-middle badge bg-secondary">
              <?php
              if (!empty($_SESSION['cart'])) {
                echo count($_SESSION['cart']);
              } else {
                echo 0;
              }
              ?>
            </span>
          </a>
        </div>
        <!-- end cart -->
      </div>
    </nav>
  </header>
  <!-- END HEADER -->