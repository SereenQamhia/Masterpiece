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
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

</head>

<body>
 <!-- Spinner Start -->
 <div id="spinner"
 class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
 <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
   <span class="sr-only">Loading...</span>
 </div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
 <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
  <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;" class="m-0 text-primary"><img style="height: 180px; width:280px;" src="./img/homefix-logo.png "></h2>

 </a>
 <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarCollapse">
   <div class="navbar-nav ms-auto p-4 p-lg-0">
     <a href="index.html" class="nav-item nav-link ">Home</a>
     <a href="about.html" class="nav-item nav-link">About</a>
     <div class="nav-item dropdown">
       <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Services</a>
       <div class="dropdown-menu fade-up m-0">
         <a href="carpenter.html" class="dropdown-item ">Carpenter</a>
         <a href="electrical.html" class="dropdown-item ">Electrical</a>
         <a href="painting.html" class="dropdown-item ">Painting</a>
         <a href="plumbing.html" class="dropdown-item">Plumbing</a>
       </div>
     </div>
     <a href="" class="nav-item nav-link">Courses</a>
     <a href="" class="nav-item nav-link">Join us</a>
   </div>
   <a href="Login.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
       class="fa fa-arrow-right ms-3"></i></a>
 </div>
</nav>
<!-- Navbar End -->

<!-- Page Header Start -->
<div class="container-fluid page-header2 py-5 mb-6">
<div class="container py-5 d-flex justify-content-center flex-column">
 <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif" >Profile</h1>
 <nav aria-label="breadcrumb animated slideInDown">
   <ol class="breadcrumb">
     <li class="breadcrumb-item">
       <a class="text-white" href="#">Home</a>
     </li>
 
     <li class="breadcrumb-item text-white active" aria-current="page">
       My Profile
     </li>
   </ol>
 </nav>
</div>
</div>


<div class="container emp-profile mt-5">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="profile-head">
                            <h5>
                                Seline Yousef
                            </h5>
                          
                            <p class="proile-rating">RANKINGS : <span>9.5/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Schedule-tab" data-toggle="tab" href="#Schedule" role="tab" aria-controls="Schedule" aria-selected="false">Schedule</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent" > 
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Seline68</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Seline Yousef</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Seline@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>077759889</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>City</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Irbid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Eidon</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>*********</p>
                                    </div>
                                </div>
                              
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Membership Status:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>active</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Membership Expiry Date:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>15/12/2023</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Your Offer Code:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>S23V</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Membership Benefits:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>priority scheduling, exclusive offers, workshops</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Availability:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>3 months</p>
                                    </div>
                                </div>
                  
                    </div>


                    <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#id</th>
                                <th scope="col">Service</th>
                                <th scope="col">Profisional</th>
                                <th scope="col">Date</th>
                                <th scope="col">time</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Painting</td>
                                <td>Omar Mohammad</td>
                                <td>27/8/2023</td>
                                <td>10am</td>
                                <td>Done</td>
                                <td><center><i class="fa-solid fa-x"></i></center></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Carpinter</td>
                                <td>Ali Ahmad</td>
                                <td>4/9/2023</td>
                                <td>9am</td>
                                <td>Waiting</td>
                                <td><i class="fa-solid fa-pen-to-square"></i> / <i class="fa-solid fa-x"></i></td>
                              </tr>
                          
                            </tbody>
                          </table>
            </div>
                </div>
            </div>
        </div>
    </form>           
</div>



  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
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
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Services</h4>
          <a class="btn btn-link" href="">Carpentry</a>
          <a class="btn btn-link" href="">Electrical</a>
          <a class="btn btn-link" href="">Painting</a>
          <a class="btn btn-link" href="">Plumping</a>
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
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
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
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

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