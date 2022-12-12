<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Begin Bootstrap css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <!-- End Bootstrap css -->
      <!-- Begin Bootstrap icon -->
      <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css" />
      <!-- End Bootstrap icon -->
      <link rel="stylesheet" href="assets/css/styles.css" />
      <title>YouTrain</title>
   </head>
   <body>
      <!-- BEGIN Header -->
      <header>
         <!-- navbar -->
         <nav class="navbar navbar-expand-lg navbar-dark p-md-4" style="background-color: #1c2331">
            <div class="container">
               <div class="d-flex">
                  <img src="assets/img/Logo.png" class="img-logo" alt="Logo_Train" />
                  <a href="index.html" class="navbar-brand">YOUTRAIN</a>
               </div>

               <button
                  type="button"
                  class="navbar-toggler"
                  data-bs-target="#navbarNav"
                  data-bs-toggle="collapse"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle Navbar"
               >
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav text-center d-flex align-items-center">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="bookings.php" class="nav-link text-white">Bookings</a>
                            </li>
                            <li>
                                <!-- basket -->
                                <a href="basket.php" class="position-relative nav-link text-white ">
                                    <i class="bi bi-bag-check-fill fs-4"></i>
                                    <span class="position-absolute end-0 top-0 text-white font-weight-bold w-50 rounded-circle" style="background-color: #6351ce;">0</span>
                                </a>
                            </li>
                            <!-- begin User -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="30" alt="Portrait of a Woman" loading="lazy" />
                                    <span class="ps-2 text-white">Saad Moumou</span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="profile.html">My profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end User -->
                        </ul>
                    </div>
            </div>
         </nav>
      </header>
      <!-- END Header -->
      <!-- begin content fouad -->
      <section class="py-5" style="background-image: url('./assets/img/banner-image.jpg')">
         <div class="container">
            <div class="row g-5">
               <div class="col-md-5 col-lg-4 order-md-last">
                  <h4 class="d-flex justify-content-between align-items-center">
                     <span class="cart-span text-light">In YOUR CART</span>
                     <!-- <span class="badge bg-primary rounded-pill">3</span> -->
                  </h4>
                  <ul class="list-group mb-3">
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Departure station</h6>
                           <small class="text-muted">station A</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Arrival station</h6>
                           <small class="text-muted">station B</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Class</h6>
                           <small class="text-muted">Class 1</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>20DH</strong>
                     </li>
                  </ul>
               </div>
               <div class="col-md-7 col-lg-8">
                  <h4 class="mb-3 text-light">CHECKOUT</h4>
                  <form class="needs-validation" novalidate="">
                     <div class="row g-3">
                        <div class="col-sm-6">
                           <label for="firstName" class="form-label text-light">First name</label>
                           <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
                           <div class="invalid-feedback">Valid first name is required.</div>
                        </div>

                        <div class="col-sm-6">
                           <label for="lastName" class="form-label text-light">Last name</label>
                           <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" />
                           <div class="invalid-feedback">Valid last name is required.</div>
                        </div>

                        <div class="col-12">
                           <label for="username" class="form-label text-light">Username</label>
                           <div class="input-group has-validation">
                              <span class="input-group-text">@</span>
                              <input type="text" class="form-control" id="username" placeholder="Username" required="" />
                              <div class="invalid-feedback">Your username is required.</div>
                           </div>
                        </div>

                        <div class="col-12">
                           <label for="email" class="form-label text-light">Email</label>
                           <input type="email" class="form-control" id="email" placeholder="you@example.com" reauired />
                           <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
                        </div>
                     </div>

                     <hr class="my-4 text-white" />

                     <h4 class="mb-3 text-light">Payment</h4>

                     <div class="my-3">
                        <div class="form-check">
                           <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="" />
                           <label class="form-check-label text-light" for="credit">Credit card</label>
                        </div>
                        <div class="form-check">
                           <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="" />
                           <label class="form-check-label text-light" for="debit">Debit card</label>
                        </div>
                        <div class="form-check">
                           <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="" />
                           <label class="form-check-label text-light" for="paypal">PayPal</label>
                        </div>
                     </div>

                     <hr class="my-4" />
                     <button class="btn btn-lg text-light checkout-button" type="submit">Continue to checkout</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- end content fouad -->

      <!-- BEGIN footer -->
      <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
         <!-- Social media -->
         <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <!-- Left -->
            <div class="me-5">
               <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
            <!-- Right -->
            <div>
               <a href="" class="text-white me-4 text-decoration-none">
                  <i class="bi bi-facebook"></i>
               </a>
               <a href="" class="text-white me-4 text-decoration-none">
                  <i class="bi bi-twitter"></i>
               </a>
               <a href="" class="text-white me-4 text-decoration-none">
                  <i class="bi bi-google"></i>
               </a>
               <a href="" class="text-white me-4 text-decoration-none">
                  <i class="bi bi-instagram"></i>
               </a>
               <a href="" class="text-white me-4 text-decoration-none">
                  <i class="bi bi-linkedin"></i>
               </a>
               <a href="" class="text-white me-4 text-decoration-none">
                  <i class="bi bi-github"></i>
               </a>
            </div>
            <!-- Right -->
         </section>
         <!-- Social media -->

         <!-- Links -->
         <section>
            <div class="container text-center text-md-start mt-5">
               <!-- Grid row -->
               <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                     <!-- Content -->
                     <h6 class="text-uppercase fw-bold">Company name</h6>
                     <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                     <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold">Products</h6>
                     <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                     <p>
                        <a href="#!" class="text-white text-decoration-none">MDBootstrap</a>
                     </p>
                     <p>
                        <a href="#!" class="text-white text-decoration-none">MDWordPress</a>
                     </p>
                     <p>
                        <a href="#!" class="text-white text-decoration-none">BrandFlow</a>
                     </p>
                     <p>
                        <a href="#!" class="text-white text-decoration-none">Bootstrap Angular</a>
                     </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold">Useful links</h6>
                     <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                     <p>
                        <a href="#!" class="text-white text-decoration-none">Your Account</a>
                     </p>
                     <p>
                        <a href="#!" class="text-white text-decoration-none">Become an Affiliate</a>
                     </p>
                     <p>
                        <a href="#!" class="text-white text-decoration-none">Shipping Rates</a>
                     </p>
                     <p>
                        <a href="#!" class="text-white text-decoration-none">Help</a>
                     </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold">Contact</h6>
                     <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                     <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                     <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                     <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                     <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                  </div>
                  <!-- Grid column -->
               </div>
               <!-- Grid row -->
            </div>
         </section>
         <!-- Section: Links  -->

         <!-- Copyright -->
         <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white text-decoration-none" href="https://mdbootstrap.com/">STAR SQUAD</a>
         </div>
         <!-- Copyright -->
      </footer>
      <!-- END footer -->

      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>
