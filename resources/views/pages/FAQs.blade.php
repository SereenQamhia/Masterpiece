@extends('layout.master')

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header2 py-5 mb-5">
    <div class="container py-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif" >FAQ</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            FAQ
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->

      <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
      
              {{-- <div class="section-title text-center">
                <h1 class="display-5 mb-5 ">FAQ</h1>

              </div> --}}
      
              <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
      
                <li>
                  <div data-bs-toggle="collapse" class="collapsed question" href="#faq1"> What services do you offer? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        We offer a range of home fixing services, including electrical repairs, carpentry work, painting solutions, and plumbing services. Whether it's a minor repair or a major renovation, our skilled professionals are here to assist you.
                    </p>
                  </div>
                </li>
      
                <li>
                  <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How do I book a service? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Booking a service is easy! Simply visit our website and navigate to the "Book Services" section. Choose the type of service you need, provide us with your details, and select a convenient date and time. We'll confirm your booking and take care of the rest.                    </p>
                  </div>
                </li>
      
                <li>
                  <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Are your professionals experienced? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Yes, our team comprises experienced professionals with years of expertise in their respective fields. Our electricians, carpenters, painters, and plumbers are skilled and knowledgeable, ensuring top-quality work on every project.                    </p>
                  </div>
                </li>
      
                <li>
                  <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Do you offer DIY courses for home fixing? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Absolutely! We offer expert-led DIY fixing courses to empower homeowners with essential skills for simple home repairs. Our courses cover a range of topics, from basic maintenance to more advanced techniques.                    </p>
                  </div>
                </li>
      
                <li>
                  <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What's the advantage of taking your DIY courses? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Our DIY courses allow you to become more self-reliant when it comes to home repairs. You'll gain practical skills, save on maintenance costs, and have the confidence to handle common issues that may arise in your home.                    </p>
                  </div>
                </li>
      
                <li>
                  <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Can I request a specific date and time for a service? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                  <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Absolutely. When booking a service, you can select your preferred date and time from the available slots. We'll do our best to accommodate your schedule.                    </p>
                  </div>
                </li>
      
              </ul>
      
            </div>
          </section>
         
          @endsection