@extends('layout.master')

@section('content')


<link href="{{ asset('css/categores.css') }}" rel="stylesheet">
    

    @foreach($courseinfo as $course)
    <!-- Page Header Start -->
    <div class="container-fluid page-header2 py-5 mb-6">
      <div class="container py-5 d-flex justify-content-center flex-column">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{$course->title}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
                Courses
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

@endforeach


  <script src="{{ asset('lib/purecounter/purecounter_vanilla.js') }}"></script>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new PureCounter('.purecounter');
    });

  </script>










@endsection