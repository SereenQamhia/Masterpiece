@extends('layout.master')

@section('content')


<link href="{{ asset('css/categores.css') }}" rel="stylesheet">
    

    @foreach($courseinfo as $course)
    <!-- Page Header Start -->
  

    <div class="container-fluid page-header2 py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif" >{{$course->title}}</h1>
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






    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" style="margin-top: 50px;">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content" style="background-color: rgb(131, 144, 116)">
              <h3>Why Choose DIY Mastery for Your Skill-Building Journey?</h3>
              <p style="color: rgb(255, 255, 255);">
                {{$course->description}}, This comprehensive course dives deep into {{$course->title}}, covering essential
                concepts, practical applications, and hands-on projects. From beginner to advanced topics, you'll gain a solid understanding
                 of {{$course->title}} and the skills needed for success.</p>
      
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Duration: </h4>
                    <p>
                     <strong> {{$course->duration}} </strong>, This {{$course->duration}}-week program is designed to provide in-depth coverage 
                      of {{$course->title}} concepts. Each week builds upon the previous, ensuring a thorough 
                      exploration of the subject matter.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4> Schedule: </h4>
                    <p>
                     </strong> Join us on <strong> {{$course->day}}s </strong> at <strong> {{$course->time}} </strong> for engaging sessions. This flexible schedule allows you to balance learning with your other commitments.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Course Fee:</h4>
                    <p>               
                      <strong> ${{$course->price}} </strong>, this investment covers all course materials,
                      access to exclusive resources, and guidance from experienced instructors.
                       We believe in providing exceptional value to our participants.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->



    <div class="container-xxl py-5">
      <div class="container" style="margin-top: 50px;">
          <div class="section-title text-center">
              <h1 class="display-8 mb-5">Enroll Now In {{$course->title}} Course</h1>
          </div>

          <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
            <div class="container quote px-lg-0 ">
          <div class=" quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
            <div class="p-lg-5 ">
         
          <form method="POST" action="">
            @csrf
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" placeholder="Full Name" style="height: 55px;" name="name">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="email" class="form-control border-0" placeholder="Email Address" style="height: 55px;" name="email">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" placeholder="Contact Number" style="height: 55px;" name="phone">
                </div>
                <div class="col-12 col-sm-6">
                  <select name="subject" class="form-select border-0" style="height: 55px;">
                    <option selected>Select A Course</option>
                    @foreach ($Courses as $course)
                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                    @endforeach
                </select>
                
                </div>
                <div class="col-12">
                    <textarea class="form-control border-0" placeholder="Previous DIY Experience (if any)" name="message"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Enroll Now</button>
                </div>
            </div>
        </form>
      </div>
    </div>

  </div>
</div>

      </div>
      </div>





















@endforeach






@endsection