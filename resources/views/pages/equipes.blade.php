@extends("layouts.main")
@section("content")
<main>



    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Notre équipe</li>
                        </ol>
                    </nav>

                    <h2 class="text-white">Toute l'équipe</h2>
                </div>

            </div>
        </div>
    </header>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h3 class="mb-4">Nous vous présentons notre équipe</h3>
                </div>

                <div class="col-lg-8 col-12 mt-3 mx-auto">
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset("equipe/membre1.jpg") }}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Luc Kadima</h5>

                                    <p class="mb-0">Topic Listing includes home, listing, detail and contact pages. Feel free to modify this template for your custom websites.</p>

                                    <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                </div>

                                <span class="badge bg-design rounded-pill ms-auto">14</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset("equipe/membre2.jpg") }}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Henrique</h5>

                                    <p class="mb-0">Visit TemplateMo website to download free CSS templates. Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>

                                    <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4"></a>
                                </div>

                                <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset("equipe/membre3.jpg") }}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Vanessa</h5>

                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>

                                    <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h3 class="mb-4">Diana Consulting</h3>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg">
                        <a href="topics-detail.html">
                            <div class="d-flex">

                                <span class="badge bg-finance rounded-pill ms-auto">30</span>
                            </div>

                            <img src="{{ asset("equipe/EXTERIEUR OK.png") }}" class="custom-block-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100">
                            <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">Une agence des médias</h5>

                                    <p class="text-white"></p>

                                    <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3"></a>
                                </div>

                                <span class="badge bg-finance rounded-pill ms-auto">25</span>
                            </div>

                            <div class="social-share d-flex">
                                <p class="text-white me-4">Nos réseaux:</p>

                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-pinterest"></a>
                                    </li>
                                </ul>

                                <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                            </div>

                            <div class="section-overlay"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection
