<main>
    <div class="container">
        <div class="p-5 text-center bg-light" style="margin-top: 30px;">
            <!-- <p>REGISTRATION</p>
        <form action="controler-register.php" method="POST">
            <div>
                Username: <input type="text" id="name" name="name">
            </div>
            <br>
            <div>
                Passowrd: <input type="password" id="password" name="password">
            </div>
            <br>
            <div>
                Email: <input type="email" id="email" name="email">
            </div>
            <br>
            <div>
                <input type="submit" name="registration" id="registration">
            </div>
        </form> -->

            <section id="section" class="vh-100 bg-image" style="background-image: url('./public/theme/img/background.webp');" style="background-size:cover ;"><br>
                <!-- <div class="row mt-5">  -->
                <div class="spContainer mx-auto">
                    <!-- <div class="card px-4 py-5 border-0 shadow">  -->
                    <div class="d-inline text-left mb-3">
                        <h3 class="font-weight-bold">Create an account</h3>
                        <img src="./public/theme/img/registration.png" width="200px" height="200px">
                    </div>
                    <div> <br><?php echo $msg ?></div>
                    <form class="form-group mx-auto" method="POST" action="controler-register.php">
                        <div class="container">
                            <div class="d-inline text-center mb-0"><br>
                                <div class="form-group mx-auto">
                                    <input class="form-control inpSp" type="text" placeholder=" Your name" name="name">
                                </div><br>
                            </div>
                            <div class="d-inline text-center mb-0">
                                <div class="form-group mx-auto">
                                    <input class="form-control inpSp" type="email" placeholder=" Your email" name="email">
                                </div><br>
                            </div>
                            <div class="d-inline text-center mb-3">
                                <div class="form-group mx-auto">
                                    <input class="form-control inpSp" type="password" placeholder="Password" name="pass">
                                </div>
                            </div><br>
                            <input class="btn btn-outline-secondary" type="submit" name="registration" value="Register">
                        </div>
                    </form>
                    <div class="d-inline text-left mt-3">
                        <div class="form-group mx-auto mb-0"><br>
                            <p>Have you already an account?</p>
                            <a class="text-black font-weight-bold regStr" href="controler-login-page.php">Login here</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </section>
    </div>
    <!-- Pagination -->
    <!-- <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
            <li class="page-item">
                <a class="page-link" href="controler-login-page.php" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item "><a class="page-link" href="controler-home-page.php">1</a></li>
            <li class="page-item">
                <a class="page-link " href="controler-products.php">2 </a>
            </li>
            <li class="page-item " aria-current="page"><a class="page-link" href="controler-about.php">3</a></li>
            <li class="page-item">
            <li class="page-item "><a class="page-link" href="controler-contact.php">4</a></li>
            <li class="page-item "><a class="page-link" href="controler-login-page.php">5</a></li>
            <li class="page-item active"><a class="page-link" href="controler-register.php">6</a></li>
        </ul>
    </nav> -->
</main>