<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>HomeFix</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>

  <!-- Libraries Stylesheet -->
 <!-- Libraries Stylesheet -->
<link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

</head>

<body>
 



      <!-- main body start -->
      <main>
     

         <!-- Breadcrumb section start -->
         <section class="breadcrumb_sec_1 position-relative">
            <div class="breadcrumb_wrap sec_space_mid_small"
            style="background-image: url('{{ asset('img/funfact_bg_1.png') }}'); height: 300px; padding: 90px;">
       
               <div class="breadcrumb_cont text-center">
                  <div class="breadcrumb_title">
                     <h2 class="text-white " style="font-family: Georgia, 'Times New Roman', Times, serif">HomeFix</h2>
                  </div>
                  {{-- <ul class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                     <li><a href="index.html"></i>Home</a></li>
                     <li><i class="fas fa-chevron-right"></i> Dashboard</li>
                  </ul> --}}
               </div>
            </div>
         </section>
         <!-- Breadcrumb section end -->

         <!-- vendor_dashboard_section - start
                  ================================================== -->
         <section class="vendor_dashboard_section bg_gray" data-aos="fade-up"
         data-aos-duration="2000">
            <div class="container">
               <div class="row">
                  <div class="col col-lg-3">
                     <div class="vd_tab_area">
                        <div class="vd_space">
                           <div class="vd_info_wrap text-center">
                              <div class="vd_image">
                                 <div class="image_wrap" >
                                    <img src="{{ url('img/' . Auth::guard('admin')->user()->image) }}" alt="image_not_found" style="width: 100%;
                                    height: auto;" >
                                 </div>
                              
                              </div>
                              <h2 class="vd_mane">{{ Auth::guard('admin')->user()->name}}</h2>
                            
                           </div>
                        </div>

                        <ul class="vd_tab_nav nav ul_li_block" role="tablist">
                           <li>
                               <button class="{{ request()->is('Dash*') ? 'active' : '' }}" >
                                   <a href="{{ route('Dashboard.index') }}" style="color: rgb(25, 24, 24) ; ">Dashboard</a>
                               </button>
                           </li>

                           <li>
                            <button class="{{ request()->is('adminProfile*') ? 'active' : '' }}" >
                                <a href="{{ route('adminProfile.index') }}" style="color: rgb(25, 24, 24) ; ">Profile</a>
                            </button>
                         </li>
                           
                           <li>
                               <button class="{{ request()->is('Admins*') ? 'active' : '' }}" >
                                   <a href="{{ route('Admins.index') }}" style="color: rgb(25, 24, 24) ; ">Admins</a>
                               </button>
                           </li>

                           <li>
                            <button class="{{ request()->is('Users*') ? 'active' : '' }}" >
                                <a href="{{ route('Users.index') }}" style="color: rgb(25, 24, 24) ; ">Users</a>
                            </button>
                        </li>

                           <li>
                               <button class="{{ request()->is('Services*') ? 'active' : '' }}" >
                                   <a href="{{ route('Services.index') }}" style="color: rgb(25, 24, 24) ; ">Services</a>
                               </button>
                           </li>
                           <li>
                               <button class="{{ request()->is('Providers*') ? 'active' : '' }}" >
                                   <a href="{{ route('Providers.index') }}" style="color: rgb(25, 24, 24) ; ">Providers</a>
                               </button>
                           </li>

                           <li>
                            <button class="{{ request()->is('Professionals*') ? 'active' : '' }}" >
                                <a href="{{ route('Professionals.index') }}" style="color: rgb(25, 24, 24) ; ">Professionals</a>
                            </button>
                         </li>

                         <li>
                            <button class="{{ request()->is('JoinUs*') ? 'active' : '' }}" >
                                <a href="{{ route('JoinUs.index') }}" style="color: rgb(25, 24, 24) ; ">Joining requists</a>
                            </button>
                         </li>

                         
                           <li>
                               <button class="{{ request()->is('Courses*') ? 'active' : '' }}" >
                                   <a href="{{ route('Courses.index') }}" style="color: rgb(25, 24, 24) ; ">Courses</a>
                               </button>
                           </li>

                           <li>
                            <button class="{{ request()->is('Reviews*') ? 'active' : '' }}" >
                                <a href="{{ route('Reviews.index') }}" style="color: rgb(25, 24, 24) ; ">Reviews</a>
                            </button>
                         </li>
                         <li>
                            <button class="{{ request()->is('admin_logout*') ? 'active' : '' }}" >
                                <a href="{{ route('admin_logout') }}" style="color: rgb(25, 24, 24) ; ">Logout</a>
                            </button>
                         
                        </li>
                       </ul>
                       

                 
                     </div>
                  </div>

                        
                        <div class="col col-lg-9">
                            <div class="tab-content">


                                @yield('content')





                            </div>
                        </div>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
   integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
   crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
   integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
   crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
   crossorigin="anonymous"></script>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>

 @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>