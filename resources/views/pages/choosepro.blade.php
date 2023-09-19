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
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/choosepro.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
   
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
      <a
        href="index.html"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >
      <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;" class="m-0 text-primary"><img style="height: 180px; width:280px;" src="./img/homefix-logo.png "></h2>

      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a href="index.html" class="nav-item nav-link ">Home</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle active"
              data-bs-toggle="dropdown"
              >Services</a
            >
            <div class="dropdown-menu fade-up m-0">
                <a href="carpenter.html" class="dropdown-item active">Carpenter</a>
                <a href="electrical.html" class="dropdown-item">Electrical</a>
              <a href="painting.html" class="dropdown-item">Painting</a>
              <a href="plumbing.html" class="dropdown-item">Plumbing</a>
            </div>
          </div>
          <a href="service.html" class="nav-item nav-link">Courses</a>
          <a href="project.html" class="nav-item nav-link">Project</a>
          <a href="" class="nav-item nav-link">Join us</a>
        </div>
        <a
          href="Login.html"
          class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
          >Login<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->
 <!-- Page Header Start -->
 <div class="container-fluid page-header2 py-5 mb-6">
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
        <li class="breadcrumb-item text-white active" aria-current="page">
          Our profissionals
        </li>
      </ol>
      </nav>
      </div>
      </div>




 <div class="pagedisplay row ">
 
    <!--Filter section start-->
    <div class="  header col-md-3">


    <h2 id="filterHeader2">Filter by:</h2>
    <form id="filter-form">
        <div class="input-group">
            <label for="rating">Rating:</label> <br>
            <select name="rating" id="rating" class="filter">
                <option value="" selected>All</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="input-group">
            <label for="years">Years of experts:</label> <br>
            <select name="years" id="years" class="filter">
                <option value="" selected>All</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="input-group">
            <label for="price">Price per hour:</label>
            <select name="price" id="price" class="filter">
                <option value="" selected>All</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="input-group">
            <label for="location">Location:</label>
            <select name="location" id="location" class="filter">
                <option value="" selected>All</option>
                <!-- Add more options here -->
            </select>
          </div>
          
<div class="calendar-container">
  <header class="calendar-header">
      <p class="calendar-current-date"></p>
      <div class="calendar-navigation">
          <span id="calendar-prev"
                class="material-symbols-rounded">
              chevron_left
          </span>
          <span id="calendar-next"
                class="material-symbols-rounded">
              chevron_right
          </span>
      </div>
  </header>

  <div class="calendar-body">
      <ul class="calendar-weekdays">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
      </ul>
      <ul class="calendar-dates"></ul>
  </div>
</div>
        
      <button type="submit" class="btn btnFilter btn-lg"> Filter</button>
    </form>
  
    
</div>







<div class="col-md-9">
  <div class="pro">
   
    <img style="border-radius: 500px; width: 150px;height: 150px;" src="./img/pro1.png" >
  
    <div > 
        <h2 style="font-size: 30px;">Omar M.</h2>
        <div><i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i></div> 
            <img style=" width: 35px;" src="./img/complited.svg">55 job complited</img> <br>
            <i class="fa-solid fa-location-dot fa-lg" style="color: #ffba1a; padding: 10px;"></i>Irbid
         </div>

         <div>
        <a href="profissionalPage.html">
            <button type="submit" class="btn btnmore btn-lg">More info</button> </a>
         </div>

        </div>
<div class="pro">
    <img style="border-radius: 500px;  width: 150px;height: 150px;" src="./img/pro2.png" >
    
    <div > 
        <h2 style="font-size: 30px;">Fouad S.</h2>
        <div><i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i></div> 
            <img style=" width: 45px;" src="./img/complited.svg">70 job complited</img> <br>
            <i class="fa-solid fa-location-dot fa-lg" style="color: #ffba1a; padding: 10px;"></i>Aqaba
         </div>

         <div>
      
            <button type="submit" class="btn btnmore btn-lg">More info</button>
         </div>

        </div> 
<div class="pro">
   
    <img style="border-radius: 500px; width: 150px;height: 150px;" src="./img/pro3.png" >
   <div>
        <h2 style="font-size: 30px;">Eman H.</h2>
        <div><i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i></div> 
            <img style=" width: 45px;" src="./img/complited.svg">85 jobs completed</img> <br>
            <i class="fa-solid fa-location-dot fa-lg" style="color: #ffba1a; padding: 10px;"></i>Amman
         </div>

         <div>
      
            <button type="submit" class="btn btnmore btn-lg">More info</button>
         </div>

</div>
        </div>
</div>
  <div class="pages">
<center>
    <i class="fa-solid fa-chevron-left fa-2xl" style="color: #0041b3;"></i>
    <button type="button" style="color: white;" class="btn btn-warning btn-lg">1</button>
    <button type="button" style="color: white;" class="btn btn-warning btn-lg">2</button> 
    <i class="fa-solid fa-ellipsis" style="color: #033fa5;"></i>
    <button type="button" style="color: white;" class="btn btn-warning btn-lg">15</button>
    <i class="fa-solid fa-chevron-right fa-2xl" style="color: #0041b3;"></i>
</center>
  </div>








    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Address</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Irbid</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0775154882</p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@HomeFix.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Services</h4>
            <a class="btn btn-link" href="carpenter.html">Carpentry</a>
            <a class="btn btn-link" href="electrical.html">Electrical</a>
            <a class="btn btn-link" href="painting.html">Painting</a>
            <a class="btn btn-link" href="plumbing.html">Plumping</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="contact.html">Contact Us</a>
            <a class="btn btn-link" href="">Join Us</a>
            <a class="btn btn-link" href="">FAQs</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Newsletter</h4>
            <p>
              Get home improvement insights and exclusive offers – subscribe
              now!
            </p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">HomeFix</a>, All Right
              Reserved.
            </div>
            <!-- <div class="col-md-6 text-center text-md-end"> -->
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/purecounter/purecounter_vanilla.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
  
    


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  

  </body>
</html>