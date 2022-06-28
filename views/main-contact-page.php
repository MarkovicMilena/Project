<main>
  <div class="container">
    <div class="p-5 text-center bg-light" style="margin-top: 30px;">
      <div class="row">
        <div class="col-6">
          <p>Contact us with message</p>
          <?php echo $msgSuccess ?>
          <form action="controler-contact.php" method="post" style="display:block ;">
            <!-- First Name input -->
            <div class="form-outline mb-4">
              <input type="text" name="fname" id="fName" class="form-control" placeholder="Your name.." />
              <!-- <label class="form-label" for="fName">First Name</label> -->
            </div>
            <!--Last  Name input -->
            <div class="form-outline mb-4">
              <input type="text" name="lname" id="lName" class="form-control" placeholder="Your last name.." />
              <!-- <label class="form-label" for="lName">Last Name</label> -->
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control" name="email" placeholder="Your Email Address.." />
              <!-- <label class="form-label" for="email">Email address</label> -->
            </div>
            <!-- Subject input -->
            <div class="form-outline mb-4">
              <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject..">
              <!-- <label class="form-label" for="subject">Subject</label> -->
            </div>
            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="message" rows="4" name="message" placeholder="Write message"></textarea>
              <!-- <label class="form-label" for="message">Message</label> -->
            </div>

            <!-- Submit button -->
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-secondary btn-block mb-4">
          </form>
        </div>
        <div class="col-6">
          <img src="./public/theme/img/contact.png" width="500px" height="400px">
        </div>
      </div>
    </div>

  
    <!-- <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="controler-about.php" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item "><a class="page-link" href="controler-home-page.php">1</a></li>
        <li class="page-item">
          <a class="page-link " href="controler-products.php">2 </a>
        </li>
        <li class="page-item " aria-current="page"><a class="page-link" href="controler-about.php">3</a></li>
        <li class="page-item">
        <li class="page-item active"><a class="page-link" href="controler-contact.php">4</a></li>
        <li class="page-item "><a class="page-link" href="controler-login-page.php">5</a></li>
        <li class="page-item "><a class="page-link" href="controler-register.php">6</a></li>
        <li class="page-item">
          <a class="page-link" href="controler-login-page.php">Next</a>
        </li>
      </ul>
    < </nav> -->

</main>