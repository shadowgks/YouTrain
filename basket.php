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
                        <li>
                            <!-- sign in -->
                            <a href="login.php" class="btn text-white px-4 ms-lg-3" style="background-color: #6351ce">Sign in <i class="bi bi-arrow-right-short"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- END Header -->

    <!-- Begin Bookings -->
    <section>
        <div class="container py-5">
            <div class="card text-center">
                <h3 class="m-0 p-4 text-white" style="background-color: #6351ce">MY BASKET</h3>
                <div>
                    <hr class="p-0 m-0" />
                    <!-- price and date -->
                    <div class="row px-5 py-3">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-start fw-bold" style="color: #6351ce">#1</h5>
                            <div>
                                <div class="spinner-border" style="color: #6351ce" role="status"></div>
                                <a href="#" style="color: #6351ce"><i class="bi bi-trash fs-2"></i></a>
                            </div>
                        </div>
                        <div class="col d-md-flex">
                            <!-- date -->
                            <div class="text-start">
                                <h4>22 SEP</h4>
                            </div>
                            <hr class="d-block d-md-none" />
                            <!-- time -->
                            <div class="ms-md-5">
                                <div class="text-start">
                                    <span class="fw-bold" style="color: #6351ce">11:13</span>
                                    <span>Youssoufia</span>
                                </div>
                                <div class="text-start">
                                    <span class="fw-bold" style="color: #6351ce">02:20</span>
                                    <span>Casablanca</span>
                                </div>
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col text-end">
                            <h4 class="text-end">100.00DH</h4>
                        </div>
                    </div>
                    <!-- Ticket -->
                    <div class="row gap-4 align-items-center mx-5 mb-5 py-3 text-white rounded" style="background-color: #1c2331">
                        <!-- time -->
                        <div class="col-lg">
                            <!-- time -->
                            <div class="">
                                <div class="">
                                    <span class="fw-bold" style="color: #6351ce">11:13</span>
                                    <span>Youssoufia</span>
                                </div>
                                <div class="">
                                    <span class="fw-bold" style="color: #6351ce">02:20</span>
                                    <span>Casablanca</span>
                                </div>
                            </div>
                        </div>
                        <hr class="w-25 m-auto d-block d-lg-none" />
                        <!-- names -->
                        <div class="col-lg">
                            <p class="m-0">Saad Moumou</p>
                            <p class="m-0">Issam Moumou</p>
                        </div>
                        <!-- Refund and exchange -->
                        <hr class="w-25 m-auto d-block d-lg-none" />
                        <div class="col-lg">
                            <p class="fw-bold" style="color: #6351ce">Refund and exchange: STANDARD</p>
                        </div>
                    </div>
                </div>
                <div>
                    <hr class="p-0 m-0" />
                    <!-- price and date -->
                    <div class="row px-5 py-3">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-start fw-bold" style="color: #6351ce">#2</h5>
                            <div>
                                <div class="spinner-border" style="color: #6351ce" role="status"></div>
                                <a href="#" style="color: #6351ce"><i class="bi bi-trash fs-2"></i></a>
                            </div>
                        </div>
                        <div class="col d-md-flex">
                            <!-- date -->
                            <div class="text-start">
                                <h4>22 SEP</h4>
                            </div>
                            <hr class="d-block d-md-none" />
                            <!-- time -->
                            <div class="ms-md-5">
                                <div class="text-start">
                                    <span class="fw-bold" style="color: #6351ce">11:13</span>
                                    <span>Youssoufia</span>
                                </div>
                                <div class="text-start">
                                    <span class="fw-bold" style="color: #6351ce">02:20</span>
                                    <span>Casablanca</span>
                                </div>
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col text-end">
                            <h4 class="text-end">100.00DH</h4>
                        </div>
                    </div>
                    <!-- Ticket -->
                    <div class="row gap-4 align-items-center mx-5 mb-5 py-3 text-white rounded" style="background-color: #1c2331">
                        <!-- time -->
                        <div class="col-lg">
                            <!-- time -->
                            <div class="">
                                <div class="">
                                    <span class="fw-bold" style="color: #6351ce">11:13</span>
                                    <span>Youssoufia</span>
                                </div>
                                <div class="">
                                    <span class="fw-bold" style="color: #6351ce">02:20</span>
                                    <span>Casablanca</span>
                                </div>
                            </div>
                        </div>
                        <hr class="w-25 m-auto d-block d-lg-none" />
                        <!-- names -->
                        <div class="col-lg">
                            <p class="m-0">Saad Moumou</p>
                            <p class="m-0">Issam Moumou</p>
                        </div>
                        <!-- Refund and exchange -->
                        <hr class="w-25 m-auto d-block d-lg-none" />
                        <div class="col-lg">
                            <p class="fw-bold" style="color: #6351ce">Refund and exchange: STANDARD</p>
                        </div>
                    </div>
                </div>

                <div class="text-center me-5">
                    <!-- Prix Total -->
                    <p class="fw-bold fs-3 "><span style="color: #6351ce">TOTAL:</span> 200.00DH</p>
                    <!-- Réserver -->
                    <button class="btn text-white rounded-0 w-25 mb-4" style="background-color: #6351ce">Buy Now</button>
                </div>
            </div>

        </div>
    </section>

    <!-- End Bookings -->

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
    <script class="assets/js/scripts.js"></script>
</body>

</html>