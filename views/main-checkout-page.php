<main>
  <!-- <php
//default-na vrednost
  $nameErrorMsg = null;
  $lastNameErrorMsg = null;
  $emailErrorMsg = null;
  $cityErrorMsg = null;
  $phoneErrorMsg = null;
  $streetErrorMsg = null;
  $zipErrorMsg = null;
  $commentErrorMsg = null;
 
//preuzimanje name, last name......validacija
  if (isset($_POST['submit'])) {
    echo 'SUBMITED';
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $zip = $_POST['zip'];
    $comment = $_POST['comment'];

    
   if (!$name) {
      $nameErrorMsg =  "NAME ERROR!";
    } 
    if (!$last_name) {
      $lastNameErrorMsg =  "LAST NAME ERROR!";
    } 
    if (!$email) {
      $emailErrorMsg =  "EMAIL ERROR!";
    }
    if (!$city) {
      $cityErrorMsg =  "CITY ERROR!";
    }
    if (!$phone) {
      $phoneErrorMsg =  "PHONE ERROR!";
    }
    if (!$street) {
     $streetErrorMsg =  "STREET ERROR!";
    }
    if (!$zip) {
      $zipErrorMsg =  "ZIP ERROR!";
     }
  }
  ?> -->
  <?php if (!$submited) {  ?>

    <main>
      <div class="container">
        <div class="p-5 text-center bg-light" style="margin-top: 30px;">
          <div class="row">
            <div class="col">
              <form class="row g-3" action="controler-checkout.php" method="post">
                <div class="col-12"><br><br>
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($name); ?>">
                  <?php if (!empty($systemErrors['name'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                  <?php } ?>
                </div>
                <div class="col-12">
                  <label for="last-name">Last Name</label>
                  <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last Name" value="<?php echo htmlspecialchars($last_name); ?>">
                  <?php if (!empty($systemErrors['last_name'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                  <?php } ?>
                </div>
                <div class="col-md-12">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>">
                  <?php if (!empty($systemErrors['email'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                  <?php } ?>
                </div>
                <div class="col-md-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo htmlspecialchars($city); ?>">
                  <?php if (!empty($systemErrors['city'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city']); ?></small>
                  <?php } ?>
                </div>
                <div class="col-md-6">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo htmlspecialchars($phone); ?>">
                  <?php if (!empty($systemErrors['phone'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone']); ?></small>
                  <?php } ?>
                </div>
                <div class="col-md-10">
                  <label for="street">Street & number</label>
                  <input type="text" class="form-control" id="street" name="street" placeholder="Street & Number" value="<?php echo htmlspecialchars($street); ?>">
                  <?php if (!empty($systemErrors['street'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['street']); ?></small>
                  <?php } ?>
                </div>
                <div class="col-md-2">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" value="<?php echo htmlspecialchars($zip); ?>">
                  <?php if (!empty($systemErrors['zip'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip']); ?></small>
                  <?php } ?>
                </div>
                <!-- <div class="input-group"> -->
                <div class="col-md-12">
                  <!-- <label for="message">Message</label> -->
                  <textarea class="form-control" id="message" aria-label="With textarea" name="message" placeholder="Message"><?php echo htmlspecialchars($message); ?></textarea>
                  <?php if (!empty($systemErrors['message'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['message']); ?></small>
                  <?php } ?>
                </div>

                <div class="form-check mb-5">
                  <input type="checkbox" name="rights" value="success" class="form-check-input" id="rights" <?php if ($rights == 'success') {
                                                                                                              echo htmlspecialchars("Checked");
                                                                                                            } ?>>
                  <label class="form-check-label" for="rights">I have read and agree to the terms</label>
                  <?php if (!empty($systemErrors['rights'])) { ?>
                    <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['rights']); ?></small>
                  <?php } ?>
                </div>
                <button type="submit" class="btn btn-outline-secondary" name="buy" value="yes">Buy</button>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>">
              </form>
              <!--druga polovina stranice-->
            </div>
            <div class="col"><br>

              <h3 class="fw-light"><?php echo $product['title']; ?></h3>
              <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>

              <span>Quantity:</span>
              <p><?php echo htmlspecialchars($quantity); ?></p>
              <p>Price with quantity:</p>
              <p><?php echo htmlspecialchars($product['price'] * $quantity); ?> $</p>
              <!-- <p>TOTAL:</p>
            <p><?php echo htmlspecialchars($product['price'] * $quantity); ?> $</p> -->

              <img src="<?php echo htmlspecialchars($product['img']); ?>" width="400px" height="400px">
              <!-- <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p> -->

            </div>
          </div>

        </div>
    </main>

  <?php } else { ?>
    <main>
      <div class="container text-center" style="height:500px ;"><br><br>
        <!-- <h1 class="text-success">Cestitam <php echo $name; ?>! Uspesno ste izvrsili kupovinu proizvoda: <php echo $product['title']; ?></h1> -->
        <h1 class="fw-light"><?php echo $name; ?>, thank you for order <?php echo $product['title']; ?>!</h1>
      </div>
    </main>
  <?php } ?>