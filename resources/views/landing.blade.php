@extends('includes.header')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
          </div>

        </div>
      </section><!-- End Breadcrumbs -->



@section('sidebar')

<!--  Portfolio Details Section -->

<section id="index" class="portfolio-details">
    <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up" >

            <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/portfolio/slide-1.jpg" class="" alt="" width="1200" height="456">
                <img src="assets/img/portfolio/slide-2.jpg" width="1200" height="456" class="" alt=""  >
                <img src="assets/img/portfolio/slide-3.jpg" width="1200" height="456" class=""alt="" >
                <!--class="img-fluid" -->
            </div>
        </div>

        <div class="portfolio-description">
            <!--<h2>This is an example of portfolio detail</h2>-->
            <p >
                نقابه المهندسين بدمياط ترحب بالساده الأعضاء المشاركين في النقابه
            </p>
        </div>

    </div>
</section>
<!-- End Portfolio Details Section -->



 <!-- ======= Team Section ======= -->
 <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Check our Team</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- start google map Section -->
<section id="map" style="padding-bottom:1%; display: block;margin-left: auto;margin-right: auto;width:100%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d357.90661923216436!2d31.796444403088806!3d31.414104459569923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e50f01e0e097%3A0x61d77b3acf71b9f1!2z2YbZgtin2KjYqSDYp9mE2YXZh9mG2K_Ys9mK2YYg2KjYr9mF2YrYp9i3!5e0!3m2!1sen!2seg!4v1606739193540!5m2!1sen!2seg"
    width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<!-- end google map Section -->


@show

@yield('content')



@extends('includes.footer')
