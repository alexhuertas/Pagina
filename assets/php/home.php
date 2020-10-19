<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Inici</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
            <div class="spinner"></div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">Inici</a></li>
                           <!--<li><a href="subscribe.html">Inscriure</a></li>-->
                            <li><a href="schedule.html">Horari</a></li>
                            <li><a href="contact-us.html">Contacte</a></li>
                            <li><a href="#">Compte</a></li>
                            <li><button class="btnclosesession" ng-click="logout()">TANCAR SESSIÓ</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!--<a href="subscribe.html" class="btn-flotante">Inscriure</a>-->

    <!-- About Area Starts -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div id="bienvenidoid" class="col-lg-6 align-self-center mb-5 mb-lg-0">
                <h3>Et donem la benvinguda, <span style="color:#f5a521;">{{user_name}}</span></h3>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img class="img-fluid" src="assets/images/about.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Service Area Starts -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6">
                    <div class="section-top">
                        <h4>Entrenaments</h4>
                    </div>
                    <div class="single-service d-flex mb-4">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon1.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>Entrenament Personalitzat</h5>
                        </div>
                    </div>
                    <div class="single-service d-flex mb-4">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon1.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>Sala Fitness</h5>
                        </div>
                    </div>
                    <div class="single-service d-flex">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon1.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>Classes Dirigides</h5>
                        </div>
                    </div>
                    <br>
                    <div class="single-service d-flex">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon1.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>Dança Urbana</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area footer section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h5 class="mb-4">contacte</h5>
                            <h5>Nom:</h5>
                            <p>Hicham Bensaga</p>
                            <h5>Càrrec:</h5>
                            <p> Propietari, instructor y entrenador personal</p>
                            <h5>Ubicació</h5>
                            <p>Av. Cardenal Tarancon, nº45, Baixos, 25280 Solsona, Lleida</p>
                            <h5>Teléfon</h5>
                            <span class="span-style">641 609 971</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="https://www.instagram.com/sagafit20/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/sagafit20"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="whatsapp://send?text=Hola!&phone=+34 641 609 971&abid=+34 641 609 971"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
