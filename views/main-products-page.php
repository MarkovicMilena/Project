<main>
  <div class="container">
    <div class="p-5 text-center bg-light" style="margin-top: 30px;">
      <form action="./controler-products.php" method="get">
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="sort">
          <option <?php if ($sort == "") {
                    echo htmlspecialchars("Selected");
                  } ?> value="">Select sorting</option>
          <option <?php if ($sort == ORDER_BY_PRICE_ASC) {
                    echo htmlspecialchars("Selected");
                  } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_ASC); ?>">By price asc</option>
          <option <?php if ($sort == ORDER_BY_PRICE_DESC) {
                    echo htmlspecialchars("Selected");
                  } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_DESC); ?>">By price desc</option>
        </select>
        <button type="submit" class="btn btn-outline-secondary" name="choose">Choose</button>
        <input type="text" class="form-control" name="term" value="<?php echo htmlspecialchars($term); ?>">
        <button type="submit" class="btn btn-outline-secondary" name="search">Search</button>
      </form><br><br>
      <div class="row">
        <?php foreach ($products as $product) { ?>
          <div class="col-4">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <!-- <p><?php echo $product['title']; ?></p> -->
              <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="picture1" width="200px" height="200px"></a>
            </div>
            <div class="image">
              <p><?php echo $product['title']; ?></p>
              <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
              <a href="./controler-single-product.php?stranica=<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-outline-secondary" role="button">Show</a>

              <button form="add-to-cart-<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-outline-secondary">Cart</button>
              <form id="add-to-cart-<?php echo htmlspecialchars($product['id']); ?>" action="./controler-products.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
              </form><br>
            </div>
          </div>
        <?php } ?>
      </div>

      <hr class="my-5" />

      <!-- Pagination -->
      <!-- <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="controler-home-page.php" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item "><a class="page-link" href="controler-home-page.php">1</a></li>
          <li class="page-item">
            <a class="page-link active" aria-current="page" href="controler-products.php">2 </a>
          </li>
          <li class="page-item"><a class="page-link" href="controler-about.php">3</a></li>
          <li class="page-item">
          <li class="page-item"><a class="page-link" href="controler-contact.php">4</a></li>
          <li class="page-item "><a class="page-link" href="controler-login-page.php">5</a></li>
          <li class="page-item "><a class="page-link" href="controler-register.php">6</a></li>
          <li class="page-item">
            <a class="page-link" href="controler-about.php">Next</a>
          </li>
        </ul>
      </nav> -->
</main>