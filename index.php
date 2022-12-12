<?php
    require_once('classes\databaseClass.php');
?>
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
        <link rel="stylesheet" href="assets/css/styles.css"/>
        <title>YouTrain</title>
    </head>
    <body>
        <!-- BEGIN Header -->
        <header>
            <!-- navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-4">
                <div class="container text-center">
                    <div class="d-flex">
                        <img src="assets/img/Logo.png" class="img-logo" alt="Logo_Train" />
                        <a href="index.html" class="navbar-brand">YOUTRAIN</a>
                    </div>

                    <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav text-center d-flex align-items-center">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="bookings.html" class="nav-link text-white">Bookings</a>
                            </li>
                            <li>
                                <!-- basket -->
                                <a href="paniers.html" class="position-relative nav-link text-white ">
                                <i class="bi bi-bag-check-fill fs-4"></i>
                                <span class="position-absolute end-0 top-0 text-white font-weight-bold w-50 rounded-circle" style="background-color: #6351ce;">0</span>
                                </a>
                            </li>
                            <li>
                                <!-- sign in -->
                                <button type="button" class="btn text-white px-4 ms-lg-3" style="background-color: #6351ce">Sign in <i class="bi bi-arrow-right-short"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- banner image -->
            <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
                <div class="content text-center p-5 rounded-2 mx-3">
                    <h1 class="text-white display-1 fw-bold">WELCOME TO YOUTRAIN</h1>
                </div>
            </div>
        </header>
        <!-- END Header -->

        <!-- content -->
        <section class="container-fluid travellers-img p-md-5 p-0 vh-100 align-items-center d-flex">
            <div class="container d-grid gap-5 bg-dark bg-opacity-50 rounded p-md-5 py-4 shadow">
                <h1 class="text-center text-white">Hello Travellers</h1>
                <form class="row g-3 needs-validation text-white" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label fw-bold">Departure City</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label fw-bold">Departure</label>
                        <input type="datetime-local" class="form-control" id="validationCustom02" placeholder="Ma date de départ" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label fw-bold">Departure City</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label fw-bold">Return</label>
                        <input type="datetime-local" class="form-control" id="validationCustom03" placeholder="Ma date de retour" required />
                        <div class="invalid-feedback">Please provide a valid Return.</div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label fw-bold">Adults</label>
                        <input type="number" class="form-control" value="1" />
                        <div class="invalid-feedback">Please select a valid Adults.</div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label fw-bold">Childrens</label>
                        <input type="number" class="form-control" value="0" />
                        <div class="invalid-feedback">Please select a valid Childrens.</div>
                    </div>
                    <div class="col-12 text-center pt-4">
                        <button class="btn text-white" type="submit" style="background-color: #6351ce">Book Now <i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </form>
            </div>
        </section>

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
        <script>
            // navBar
            var nav = document.querySelector("nav");

            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 100) {
                    // nav.classList.add("bg-dark","shadow");
                    nav.style.backgroundColor = "#1c2331";
                } else {
                    nav.removeAttribute("style");
                    // nav.classList.remove("bg-dark","shadow");
                }
            });
        </script>
    </body>
</html>
