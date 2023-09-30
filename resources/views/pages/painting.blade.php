@extends('layout.master')

@section('content')


<link href="css/categores.css" rel="stylesheet" />

    <!-- Page Header Start -->
    <div class="container-fluid page-header1 py-5 mb-6">
      <div class="container py-5 d-flex justify-content-center flex-column">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Painting</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              Painting service
            </li>
          </ol>
        </nav>
      </div>
    </div>


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container" style="margin-top: -20px;">
    
            <div class="row justify-content-end">
              <div class="col-lg-11">
                <div class="row justify-content-end">
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box py-5">
                      <i class="bi bi-emoji-smile"></i>
                      <span data-purecounter-start="0" data-purecounter-end="115" class="purecounter">0</span>
                      <p>Happy Clients</p>
                    </div>
                  </div>
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box py-5">
                      <i class="bi bi-journal-richtext"></i>
                      <span data-purecounter-start="0" data-purecounter-end="120" class="purecounter">0</span>
                      <p>Projects</p>
                    </div>
                  </div>
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box pb-5 pt-0 pt-lg-5">
                      <i class="bi bi-clock"></i>
                      <span data-purecounter-start="0" data-purecounter-end="27" class="purecounter">0</span>
                      <p>Years of experience</p>
                    </div>
                  </div>
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box pb-5 pt-0 pt-lg-5">
                      <i class="bi bi-award"></i>
                      <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                      <p>Awards</p>
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
           
    
          </div>
        </section><!-- End About Section -->





    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" style="margin-top: 50px;">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Why Choose HomeFix for Your Home Painting Needs?</h3>
              <p>
                When it comes to entrusting the task of painting your home, HomeFix rises as the unrivaled premier 
                choice. Our unwavering commitment to excellence and our steadfast focus on delivering nothing but 
                the best results set us apart. We provide a seamless and transformative experience that adds a new
                 dimension to your living spaces. Here's why homeowners place their trust in us:</p>
      
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Expert Painters: </h4>
                    <p>Our skilled painting contractors bring professionalism and expertise to each project. 
                      From surface preparation to the final coat, our painters ensure a flawless finish.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Tailored Solutions:</h4>
                    <p>Understanding the uniqueness of every home, we provide customized solutions that cater to
                       your specific needs. Whether it's interior or exterior painting, our services match your vision.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Quality Assurance:</h4>
                    <p>
                      At HomeFix, quality is key. With top-notch materials and meticulous attention to detail, we deliver 
                      a finish that surpasses expectations, ensuring your home's lasting beauty.e</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

 <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container" style="margin-top: 50px;">
        <div class="section-title text-center">
            <h1 class="display-8 mb-5">With who you want to work</h1>
        </div>
        <div class="row g-6 mb-6">
            <div class="col-md-1 col-lg-1 "></div>
           @foreach ($providers as $provider)
           <div class="col-md-5 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item">
                <div class="overflow-hidden">
                    <img  class="img-fluid" src="{{ url('/img/' . $provider->image) }}" alt="">
                </div>
                <div class="p-4 text-center border border-5 border-light border-top-0">
                    <h4 class="mb-3">{{$provider->name}}</h4>
                    <p>{{$provider->description}}</p>
                    {{-- <a class="fw-medium" href="{{ route('choosepro' ,$provider->id) }}">View Companies<i class="fa fa-arrow-right ms-2"></i></a> --}}
                    <form method="POST" action="{{ route('choosepro') }}">
                      @csrf
                      <input type="hidden" name="id" value="{{$provider->id}}">
                      <button class="fw-medium" type="submit">Fetch Professionals</button>
                  </form>
                  </div>
            </div>
        </div>
           @endforeach


            {{-- <div class="col-md-5 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img  class="img-fluid" src="img/paint companies.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Painting Companies</h4>
                        <p>Comprehensive solutions with seasoned teams.</p>
                        <a class="fw-medium" href="carpenter.html">View Companies<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/paint pro.png" alt="">
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <h4 class="mb-3">Our professionals</h4>
                        <p>Personalized touch for your home's new colors.</p>
                        <a class="fw-medium" href="choose-pro.html">Choose Your Pro<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                    <div class="col-md-1 col-lg-1 "></div>
                </div>
            </div>  --}}
         </div>
        </div>
    </div>


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Hear from our profissionals</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/pro1.png" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <h5 class="mb-1">Omar M.</h5>
                      <span class="fst-italic"> <img class="img-fluid mx-auto " src="img/complited.svg" style="width: 30px; height: 30px; display: inline-block;">55 jobs completed</span>
                      <p>"I'm a specialist in attention to detail in every aspect of my business, and believe in great customer service, and because I understand the adage "home is where the heart is" I strive to be careful, and I endeavor to afford my clients with a truly professional, competitive service."</p>
                  </div>
              </div>
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/pro2.png" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <h5 class="mb-1">Fouad S.</h5>
                      <span class="fst-italic"> <img class="img-fluid mx-auto " src="img/complited.svg" style="width: 30px; height: 30px; display: inline-block;">70 jobs completed</span>
                      <p>"I've been in the Home Painting & Remodeling business for 15+yrs. I specialize in painting,  carpentry. Dependable, reliable and professional. Customer satisfaction being most important! Based in North Jordan, serving all of Irbid areas. THANK YOU for your time, Fouad S."</p>
                  </div>
              </div>
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/pro3.png" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <h5 class="mb-1">Eman H.</h5>
                      <span class="fst-italic"> <img class="img-fluid mx-auto " src="img/complited.svg" style="width: 30px; height: 30px; display: inline-block;">85 jobs completed</span>
                      <p>"I'm a specialist in Murals ,its my passion and I apply it with all of love and professionalism . When you have an imaginative mind, I will make sure to make you see it true on your wall , to make your home a place for your imaginary , creativity and comfy place for you"</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonial End -->


  <script src="lib/purecounter/purecounter_vanilla.js"></script>
    
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        new PureCounter('.purecounter');
      });

    </script>
@endsection