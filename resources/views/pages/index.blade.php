@extends("layouts.main")
@section("content")




    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center">Diana consulting</h1>

                    <h6 class="text-center">Informez-vous et restez connecté</h6>

                </div>

            </div>
        </div>
    </section>


    <section class="featured-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg">
                        <a href="topics-detail.html">
                            <div class="d-flex">
                                <div>
                                    <h5 class="mb-2">Agence de marketing</h5>

                                    <p class="mb-0">
                                        Nous sommes
                                        Diana consulting, agence de marketing et communi- cation numérique. Nous sommes une vitrine de la com- munication publicitaire, s'appuyant sur nos différents pages et plates formes dont Facebook, tweeter, tiktok et l'audiovisuel.
                                        Nous sommes dans le coaching des politiques sur leur discours politique, Stratégies de la campagne.
                                        Diana consulting vous diffuse en direct sur les réseaux sociaux pendant votre meeting, discours politique, conférence, culte....</p>
                                </div>

                                <span class="badge bg-design rounded-pill ms-auto">14</span>
                            </div>

                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100">
                            <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">Notre but</h5>

                                    <p class="text-white">
                                        Est la promotion et la valorisation de vos activités per- sonnelles et d'entreprises. La vente d'image de vos ac- tivités et de vous même est notre but.
                                        Vous présenter au grand public et consommateur c'est notre Leitmotiv.
                                        Diana consulting agence facilite l'obtention des docu- ments de voyage à tous les échelons, également vous facilite le voyage en faisant à votre place le préalable pour le voyage, puisque vous êtes le boss.
                                        Diana consulting est agence de production des documents, des émissions, des artistes etc...
                                        </p>


                                </div>


                            </div>

                            <div class="social-share d-flex">
                                <p class="text-white me-4">réseaux:</p>

                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>
                            </div>

                            <div class="section-overlay"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="explore-section section-padding" id="section_2">
        <div class="container">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Recentes videos</h1>
                </div>

            </div>
        </div>



        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                            <div class="row">
                                @foreach ($recentVideos as $item)
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">{{ $item->title }}</h5>

                                                    <p class="mb-2"> </p>
                                                </div>

                                                <span class="badge bg-design rounded-pill ms-auto">14</span>
                                            </div>
                                            <div class="custom-block-image img-fluid">
                                                {!! $item->video_name  !!}
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section class="timeline-section section-padding" id="section_3">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Nos services</h1>
                </div>

                <div class="col-lg-10 col-12 mx-auto">
                    <div class="timeline-container">
                        <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                            <div class="list-progress">
                                <div class="inner"></div>
                            </div>

                            <li>
                                <h4 class="text-white mb-1">Conseils et strategies marketing de la communication politique</h4>


                                <div class="icon-holder">
                                  <i class="bi-search"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-1">Evenementiel (mariage, conférence, croisade , séminaire)</h4>


                                <div class="icon-holder">
                                  <i class="bi-bookmark"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-1">Production documentaire, spot publicitaire, production des émitions spécialisées</h4>


                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-1">Imprimérie (polo, chemise, bash, véhicule, casquette)</h4>


                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-1">Couverture campagne électorale</h4>


                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-1">Diffusion en directe sur le réseaux sociaux</h4>


                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-1">Facilitation de diffusion dans des chaines télé en RDC</h4>

                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-1">Conception discours politique</h4>
                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-1">Facilitation voyage</h4>


                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                            <li>
                                <h4 class="text-white mb-3">wedding coaching destiny</h4>

                                <div class="icon-holder">
                                  <i class="bi-book"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <p class="text-white">
                      En savoir plus ?
                        <a href="#" class="btn custom-btn custom-border-btn ms-3">Visiter notre chaine Youtube</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="faq-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Frequently Asked Questions</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-5 col-12">
                    <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                </div>

                <div class="col-lg-6 col-12 m-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Topic Listing?
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How to find a topic?
                            </button>
                            </h2>

                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can search on Google with <strong>keywords</strong> such as templatemo portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Does it need to paid?
                            </button>
                            </h2>

                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}



    <section class="contact-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Nous contacter</h2>
                </div>

                <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                    <h4 class="mb-3">Bureau</h4>

                    <p>Route kasapa n 28.
                        Réf. Eglise BIMA</p>

                    <hr>

                    <p class="d-flex align-items-center mb-1">
                        <span class="me-2">télephone</span>

                        <a href="tel: +243 998 745 132" class="site-footer-link">
                            +243 998 745 132
                        </a>
                    </p>

                    <p class="d-flex align-items-center">
                        <span class="me-2">Email</span>

                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mx-auto">
                    <h4 class="mb-3">Lubumbashi</h4>

                    <p>Route kasapa n 28.  Réf. Eglise BIMA</p>

                    <hr>

                    <p class="d-flex align-items-center mb-1">
                        <span class="me-2">telephone</span>

                        <a href="tel: +243 827 338 204
                        610" class="site-footer-link">
                        +243 827 338 204
                        610
                        </a>
                    </p>

                    <p class="d-flex align-items-center">
                        <span class="me-2">Email</span>

                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </section>


@endsection
