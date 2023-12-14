<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diana consulting</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">
    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route("home") }}">
                    {{-- <i class="bi-back"></i> --}}
                    <span><img src="{{ asset("equipe/logo1.jpg") }}" class="rounded-circle" width="100px" height="100px" srcset=""></span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/">Accueil</a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route("equipe") }}">Notre équipe</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('contact') }}">Contact</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('dashboard') }}">DASHBOARD</a>
                        </li>
                        @endauth
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </main>
    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="/">
                        {{-- <i class="bi-back"></i> --}}
                        <span><img src="{{ asset("equipe/logo1.jpg") }}" class="rounded-circle" width="100px" height="100px" srcset=""></span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Resources</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Acceuil</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Notre équipe</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Information</h6>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 305-240-9671" class="site-footer-link">

                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">


                    <p class="copyright-text mt-lg-5 mt-4">Copyright © 2023 Diana consulting Listing Center. Tous droits reservés.
                        <br><br>Design: <a rel="nofollow" href="https://github.com/jocelinkisenga"
                            target="_blank">Jocelin K</a> Distribution <a
                          >lushidev</a>
                    </p>

                </div>

            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
