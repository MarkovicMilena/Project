<main>
  <div class="container">
     <div class="p-5 text-center bg-light" style="margin-top: 30px;"> 

      <section id="section" class="vh-100 bg-image" style="background-image: url('./public/theme/img/background.webp');" style="background-size:cover ;"><br>



        <div class="row mt-5">
          <div class="spContainer mx-auto">
            <!-- <div class="card px-4 py-5 border-0 shadow"> -->
              <div class="d-inline text-left mb-3">
                <h3 class="font-weight-bold">Login</h3>
                <img src="./public/theme/img/download.png" width="150px" height="150px">
              </div>
              <div><br>
              <?php echo $object->msgSuccess?>
              </div>
              <form class="form-group mx-auto" method="POST" action="controler-login-page.php">
                <div class="container">
                  <div class="d-inline text-center mb-0">
                    <div class="form-group mx-auto"><br>
                      <input class="form-control inpSp" type="text" placeholder=" Enter your username" name="user">
                    </div><br>
                  </div>
                  <div class="d-inline text-center mb-3">
                    <div class="form-group mx-auto">
                      <input class="form-control inpSp" type="password" placeholder="Enter your password" name="pass">
                    </div>
                  </div><br>
                  <input class="btn btn-outline-secondary" type="submit" name="submit" value="Confirm">
                </div>
              </form>
              <div class="d-inline text-left mt-3">
                <div class="form-group mx-auto mb-0"><br>
                  <a class="text-black font-weight-bold regStr" href="controler-register.php">Register new account</a>
                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

       <!-- Pagination -->
   <!-- <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="controler-contact.php" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item "><a class="page-link" href="controler-home-page.php">1</a></li>
        <li class="page-item">
          <a class="page-link " href="controler-products.php">2 </a>
        </li>
        <li class="page-item " aria-current="page"><a class="page-link" href="controler-about.php">3</a></li>
        <li class="page-item">
        <li class="page-item "><a class="page-link" href="controler-contact.php">4</a></li>
        <li class="page-item active"><a class="page-link" href="controler-login-page.php">5</a></li>
        <li class="page-item "><a class="page-link" href="controler-register.php">6</a></li>
        <li class="page-item">
          <a class="page-link" href="controler-register.php">Next</a>
        </li>
      </ul>
    </nav>
</main> -->
<!-- <main>
    <! <div class="container text-center">
       <php if ($st->rowCount() == 1) {
        echo "You are loged in succesfully!";
      } else {
        echo "You need to register an account";
      } ?> 

    </div>  


   

  </main> -->