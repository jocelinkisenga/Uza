@extends("layouts.frontend")
@section("content")

@include("components.hero")
<main id="main">



  <!-- ======= Counts Section ======= --
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->

  <section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Restaurants</h2>
        <p>A la une</p>
      </header>

      <div class="row gy-4">

        @foreach ($restaurants as $resto)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $resto->name }}</h4>
                <span></span>
                <p>{{ $resto->description }}</p>
              </div>
            </div>
          </div>

        @endforeach

      </div>

    </div>

  </section><!-- End Team Section -->




  <!-- ======= Pricing Section ======= --
  <section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Pricing</h2>
        <p>Check our Pricing</p>
      </header>

      <div class="row gy-4" data-aos="fade-left">

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #07d5c0;">Free Plan</h3>
            <div class="price"><sup>$</sup>0<span> / mo</span></div>
            <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="box">
            <span class="featured">Featured</span>
            <h3 style="color: #65c600;">Starter Plan</h3>
            <div class="price"><sup>$</sup>19<span> / mo</span></div>
            <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <h3 style="color: #ff901c;">Business Plan</h3>
            <div class="price"><sup>$</sup>29<span> / mo</span></div>
            <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="box">
            <h3 style="color: #ff0071;">Ultimate Plan</h3>
            <div class="price"><sup>$</sup>49<span> / mo</span></div>
            <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Pricing Section -->





</main><!-- End #main -->

@endsection
