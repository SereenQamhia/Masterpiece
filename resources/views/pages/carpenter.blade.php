@extends('layout.master')

@section('content')

<link href="{{ asset('css/categores.css') }}" rel="stylesheet">
    

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header2 py-5 mb-6">
      <div class="container py-5 d-flex justify-content-center flex-column">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Carpenter</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
                Carpenter service
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
                    <div class="count-box py-5" >
                      <i class="bi bi-emoji-smile" style="color: rgb(216, 112, 8);"></i>
                      <span data-purecounter-start="0" data-purecounter-end="105" class="purecounter">0</span>
                      <p>Happy Clients</p>
                    </div>
                  </div>
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box py-5">
                      <i class="bi bi-journal-richtext" style="color: rgb(216, 112, 8);"></i>
                      <span data-purecounter-start="0" data-purecounter-end="109" class="purecounter">0</span>
                      <p>Projects</p>
                    </div>
                  </div>
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box pb-5 pt-0 pt-lg-5">
                      <i class="bi bi-clock" style="color: rgb(216, 112, 8);"></i>
                      <span data-purecounter-start="0" data-purecounter-end="20" class="purecounter">0</span>
                      <p>Years of experience</p>
                    </div>
                  </div>
    
                  <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box pb-5 pt-0 pt-lg-5">
                      <i class="bi bi-award" style="color: rgb(216, 112, 8);"></i>
                      <span data-purecounter-start="0" data-purecounter-end="17" class="purecounter">0</span>
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
            <div class="content" style="background-color: rgb(226, 161, 96);">
              <h3>Why Choose HomeFix for Your Carpentry Needs?</h3>
              <p style="color: rgb(93, 78, 78);">
                Elevate your home with expert carpentry solutions by choosing HomeFix. 
                Our dedication to exceptional craftsmanship and transformative results 
                makes us your ideal choice for carpentry work. Here's why homeowners trust us:</p>
      
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Skilled Craftsmen: </h4>
                    <p>Our team of experienced carpenters brings precision and skill to every project.
                         From intricate designs to functional installations, we ensure top-notch workmanship.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Tailored Creations:</h4>
                    <p> Recognizing the uniqueness of each home, we offer personalized carpentry solutions
                         that align with your vision. Whether it's custom furniture or intricate woodwork,
                          we turn your ideas into reality.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Quality Assurance:</h4>
                    <p>
                        At HomeFix, quality is non-negotiable. We use premium materials and meticulous techniques, 
                        guaranteeing a finish that exceeds expectations and endures the test of time.</p>
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
                  <img  class="img-fluid" src="{{ url('img/' . $provider->image) }}" alt="">
              </div>
              <div class="p-4 text-center border border-5 border-light border-top-0">
                  <h4 class="mb-3">{{$provider->name}}</h4>
                  <p>{{$provider->description}}</p>
                  <a class="fw-medium" href="{{ route('choosepro' ,$provider->id) }}">View Companies<i class="fa fa-arrow-right ms-2"></i></a>
                
                </div>
          </div>
      </div>
         @endforeach
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
           
            @foreach ($professionals as $pro)
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{ url('img/' . $pro->image) }}" style="width: 90px; height: 90px;">
                <div class="testimonial-text text-center p-4">
                    <h5 class="mb-1">{{$pro->name }}</h5>
                    <span class="fst-italic"><img class="img-fluid mx-auto " src="{{asset('img/complited.svg')}}" style="width: 30px; height: 30px; display: inline-block;">{{$pro->completed_jobs}} jobs completed</span></span>
                    <p>{{$pro->description}}</p>
                </div>
            </div>
            @endforeach
        
        </div>
          
        </div>
    </div>
</div>
<!-- Testimonial End -->




{{-- 
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Hear from our profissionals</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/team-1.jpg" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <h5 class="mb-1">Wael S.</h5>
                      <span class="fst-italic"> <img class="img-fluid mx-auto " src="img/complited.svg" style="width: 30px; height: 30px; display: inline-block;">40 jobs completed</span>
                      <p>"In my carpentry, precision is paramount. Committed to exceptional service, I share the sentiment that 'home is where the heart is.' I bring a blend of care, expertise, and cost-effectiveness to every project."</p>
                  </div>
              </div>
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/cpro2.jpg" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <h5 class="mb-1">Ahmad M.</h5>
                      <span class="fst-italic"> <img class="img-fluid mx-auto " src="img/complited.svg" style="width: 30px; height: 30px; display: inline-block;">33 jobs completed</span>
                      <p>"Precision defines my carpentry approach. Dedicated to excellent service, I understand the sentiment of 'home is where the heart is.' With care and professionalism, I offer competitively priced solutions for your projects."</p>
                  </div>
              </div>
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/cpro.jpg" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <h5 class="mb-1">Salma A.</h5>
                      <span class="fst-italic"> <img class="img-fluid mx-auto " src="img/complited.svg" style="width: 30px; height: 30px; display: inline-block;">35 jobs completed</span>
                      <p>"Meticulous carpentry defines me. I value outstanding service and resonate with the essence of 'home is where the heart is.' Through attention to detail, professionalism, and competitive pricing, I ensure your satisfaction."</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonial End --> --}}

  <script src="{{ asset('lib/purecounter/purecounter_vanilla.js') }}"></script>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new PureCounter('.purecounter');
    });

  </script>
@endsection