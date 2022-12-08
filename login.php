<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Begin Bootstrap css -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- End Bootstrap css -->
  <!-- Begin Bootstrap icon -->
  <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
  <!-- End Bootstrap icon -->
  <link rel="stylesheet" href="assets/css/styles.css">
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

        <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav text-center pe-4">
            <li class="nav-item">
              <a href="#" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white">About Us</a>
            </li>
          </ul>
          <button type="button" class="btn text-white px-4 " style="background-color: #6351ce;display:none" id="btnin" onclick="show_Sign_in(event)">Sign in <i class="bi bi-arrow-right-short"></i></button>
          <button type="button" class="btn text-white px-4 " style="background-color: #6351ce" id="btnup" onclick=" show_Sign_up(event)">Sign up <i class="bi bi-arrow-right-short"></i></button>
        </div>
      </div>
    </nav>
  </header>
  <!-- END Header -->

  <!-- Begin Content Amina -->
  <!-- sign up -->
  <section class="gradient-custom" id="signup" style="display:none">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>


              <form>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label" for="firstName">First Name</label>
                      <input type="text" id="firstName" class="form-control form-control-lg" id="firstnameu" />

                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label" for="lastName">Last Name</label>
                      <input type="text" id="lastName" class="form-control form-control-lg" id="lastnameu" />

                    </div>

                  </div>
                </div>

                <div class="row">

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="emailAddress">Email</label>
                      <input type="email" id="emailAddress" class="form-control form-control-lg" id="emailaddressu" />

                    </div>

                  </div>

                </div>

                <div class="row">


                  <div class="col-md-6 mb-4 ">

                    <div class="form-outline">
                      <label class="form-label" for="firstName">Password</label>
                      <input type="text" id="firstName" class="form-control form-control-lg" id="passwordu" />

                    </div>

                  </div>
                  <div class="col-md-6 mb-4 ">

                    <div class="form-outline">
                      <label class="form-label" for="lastName">Retype Password</label>
                      <input type="text" id="lastName" class="form-control form-control-lg" id="retypepasswordu" />

                    </div>

                  </div>
                  <div class="mt-4 pt-2">
                    <button type="button" class="btn text-white px-4 " style="background-color: #6351ce">Sign up <i class="bi bi-arrow-right-short"></i></button>
                  </div>

              </form>




            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- sign in -->
  <section id="signin">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">Sign in</h3>
              <form>

                <div class="form-outline mb-4">
                  <label class="form-label" for="typeEmailX-2">Email</label>
                  <input type="email" class="form-control form-control-lg" id="emailaddressi" />

                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" class="form-control form-control-lg" id="passwordi" />

                </div>
                <div>
                  <button type="button" class="btn text-white px-4 " style="background-color: #6351ce" id="btnbuttonin">Sign in <i class="bi bi-arrow-right-short"></i></button>

                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- End Content Amina -->


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
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
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
            <hr class="mb-4 mt-0 d-inline-block mx-auto " style="width: 60px; background-color: #7c4dff; height: 2px" />
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
  </script>
</body>

</html>