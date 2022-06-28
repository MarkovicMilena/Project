<!-- <main>
  <div class="container">
  <div class="d-flex flex-column mb-3">
    <div class="p-2">
    <div class="container">
  <div class="row">
    <div class="col">
      <img src="<php echo htmlspecialchars($product['img']); ?>" width="400px" height="400px">
    </div>
    <div class="col">
      <p><php echo htmlspecialchars($product['title']); ?></p>
      <p>Price: $<php echo htmlspecialchars($product['price']); ?></p>
      <a href="./controler-checkout.php?stranica=<php echo htmlspecialchars ($product['id']) ;?> " class="btn btn-outline-secondary" role="button" >Buy</a><br><br>
      <div class="btn-group" role="group" aria-label="Basic outlined example">

    <a class="btn btn-danger" href="./single-product-page.php?stranica=<php echo htmlspecialchars(getPrevProductId($product['id'])); ?>">PREV</a>
     <a class="btn btn-warning" href="./single-product-page.php?stranica=<php echo htmlspecialchars(getNextProductId($product['id'])); ?>">NEXT</a>

       <button type="button" class="btn btn-outline-secondary">Preview</button>
  <button type="button" class="btn btn-outline-secondary">Next</button> 
</div>
    </div>
  </div>
    </div>
    </div>
    <div class="p-2">
        <p id="description"><php echo htmlspecialchars($product['description']); ?></p>
    </div>
 
    <div class="row">
            <php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-4 row mb-5">
                <div class='col-8'>
                <span><php echo htmlspecialchars($singleRelated['title']); ?></span>
                    <img src="<php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="300" height="300">
                    <a class="btn btn-outline-secondary" href="./controler-checkout-page.php?stranica=<php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <php } ?>
        </div>
         
  </div>
  </div>
</main>  -->
<main>
    <div class="container">
    <div class="p-5 text-center bg-light" style="margin-top: 30px;"> 
        <h1 class="fw-light"><?php echo htmlspecialchars($product['title']); ?></h1><br>
        <div class="row">
            <div class="col-7">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="..." width="500px" height="500px">
            </div>
            <div class="col-4">
                <p><?php echo htmlspecialchars($product['description']); ?></p>


                <form action="controler-checkout.php" method="post">
                    <input hidden name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">

                    <div class="input-group mb-3">
                        <span class="input-group-text">PRICE:</span>
                        <input name="price" class="form-control" disabled type="text" value="<?php echo htmlspecialchars($product['price']); ?> $" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">QUANTITY:</span>
                            </div>
                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="quantity">
                        </div>
                        <div class="col-12">
                        <button type="submit" class="btn btn-outline-secondary">Checkout</button>
                        </div>
                </form>
                </div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-outline-secondary" href="./controler-single-product.php?stranica=<?php echo htmlspecialchars(getPrevProductId($product['id'])); ?>">PREV</a>
                    <a class="btn btn-outline-secondary" href="./controler-single-product.php?stranica=<?php echo htmlspecialchars(getNextProductId($product['id'])); ?>">NEXT</a>
                </div>
            <!-- </div> -->
        </div>
        <!-- <div class="row">
            <php
            foreach ($relatedProducts as $singleRelated) { ?>
                <article class="single-product col-4 row mb-5 text-center">
                    <div class='col-4'>
                        <img src="<php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="230" height="230">
                    </div>
                    <div class='col-9'>
                        <h5 class="fw-light" ><php echo htmlspecialchars($singleRelated['title']); ?></h5>
                        <p>Price: <php echo htmlspecialchars($singleRelated['price']); ?> $</p>
                        <a class="btn btn-outline-secondary" href="./controler-single-product.php?stranica=<php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                    </div>
                </article>
            <php } ?>
        </div> -->

        <hr class="my-5" />
        <div class="row">
            <?php foreach ($relatedProducts as $singleRelated) { ?>
                <div class="col-4">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <!-- <p><?php echo $product['title']; ?></p> -->
                        <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="picture1" width="200px" height="200px"></a>
                    </div>
                    <div class="image">
                        <p><?php echo $singleRelated['title']; ?></p>
                        <p>Price: $<?php echo htmlspecialchars($singleRelated['price']); ?></p>
                        <a href="./controler-single-product.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>" class="btn btn-outline-secondary" role="button">Show</a><br><br>

                        <!-- <button form="add-to-cart-<php echo htmlspecialchars($singleRelated['id']); ?>" class="btn btn-outline-secondary">Cart</button>
                        <form id="add-to-cart-<php echo htmlspecialchars($singleRelated['id']); ?>" action="./controler-products.php" method="post">
                            <input type="hidden" name="product_id" value="<php echo htmlspecialchars($singleRelated['id']); ?>">
                        </form><br> -->
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</main>