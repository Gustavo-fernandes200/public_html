<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <div class="container justify-content-right">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-dark">AnyHelp</h2>
            </a>
        </div>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container justify-content-center">
            <div class="collapse navbar-collapse flex-grow-0 a" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="sobre.php" class="nav-item nav-link">Sobre</a>
                    <a href="servicos.php" class="nav-item nav-link">Serviços</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                    <a href="precos.php" class="nav-item nav-link">Preços</a>
                </div>
            </div>
        </div>
        <div class="container justify-content-left">
            <div class="collapse navbar-collapse flex-grow-0 a" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <a href="login.php" class="nav-item nav-link">Login</a>
                    <a href="register.php" class="nav-item nav-link">Register</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Sobre Nós</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="sobre.php">Sobre Nós</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about-us.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Sobre Nós</h1>
                        </div>
                        <p class="mb-4 pb-2">Somos uma organização especializada em ampla de serviços. Reconhecemos a realidade das pessoas contemporâneas, que têm escasso tempo disponível para executar tarefas e gerir atividades ou entre outros compromissos.
                            Estamos aqui para atender todas as suas necessidades! Entre em contato connosco e descubra o universo de serviços que podemos disponibilizar para você.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Equipa</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Nome completo</h5>
                            <small>Designação</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team End -->
        
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-info footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-info mb-4">Endereço</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i></p>
                    <div class="d-flex pt-2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-info mb-4">Servicos</h4>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-info mb-4">Links rapidos</h4>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AnyHelp</a>, Direitos reservados.
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>