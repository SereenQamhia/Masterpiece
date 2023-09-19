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
        <a href="service.html" class="nav-item nav-link">Courses</a>
        <a href="project.html" class="nav-item nav-link">Project</a>
        <a href="" class="nav-item nav-link">Join us</a>
      </div>
      <a href="Login.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
          class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

      <!-- main body start -->
      <main>
     

         <!-- Breadcrumb section start -->
         <section class="breadcrumb_sec_1 position-relative">
            <div class="breadcrumb_wrap sec_space_mid_small"
               style="background-image: url(./img/funfact_bg_1.png); height: 300px; padding: 90px;">
               <div class="breadcrumb_cont text-center">
                  <div class="breadcrumb_title">
                     <h2 class="text-white text-uppercase">Dashboard</h2>
                  </div>
                  <ul class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                     <li><a href="index.html"></i>Home</a></li>
                     <li><i class="fas fa-chevron-right"></i> Dashboard</li>
                  </ul>
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
                                 <div class="image_wrap">
                                    <img src="./img/pro2.png" alt="image_not_found">
                                 </div>
                                 <button type="button" class="edit_btn">
                                    <i class="fas fa-camera-retro"></i>
                                 </button>
                              </div>
                              <h2 class="vd_mane">Sereen Qamhia</h2>
                            
                           </div>
                        </div>

                        <ul class="vd_tab_nav nav ul_li_block" role="tablist">
                           <li>
                              <button class="active" data-bs-toggle="tab" data-bs-target="#tab_dashboard" type="button"
                                 role="tab" aria-selected="true">
                                 Dashboard
                              </button>
                           </li>
                           <li>
                              <button data-bs-toggle="tab" data-bs-target="#tab_products" type="button" role="tab"
                                 aria-selected="false">
                                 categories
                              </button>
                           </li>
                           <li>
                              <button data-bs-toggle="tab" data-bs-target="#tab_orders" type="button" role="tab"
                                 aria-selected="false">
                                 Orders
                              </button>
                           </li>
                           <li>
                              <button data-bs-toggle="tab" data-bs-target="#tab_profile" type="button" role="tab"
                                 aria-selected="false">
                                 Profile
                              </button>
                           </li>
                           <li>
                              <button data-bs-toggle="tab" data-bs-target="#tab_settings" type="button" role="tab"
                                 aria-selected="false">
                                 Settings
                              </button>
                           </li>
                           <li class="w-100">
                              <a href="#" >Logout</a>
                           </li>
                        </ul>

                 
                     </div>
                  </div>
                  <div class="col col-lg-9">
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_dashboard" role="tabpanel">
                           <div class="row">
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('./img/funfact_bg_1.png');" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="item_content">
                                       <h3>Total Services</h3>
                                       <span>400</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('./img/funfact_bg_2.png');" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="item_content">
                                       <h3>Vendors</h3>
                                       <span>350</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('./img/funfact_bg_3.png');" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="item_content">
                                       <h3>Ordered Services</h3>
                                       <span>958</span>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="total_revenue" data-aos="fade-up" data-aos-duration="2000">
                              <div class="vd_title_wrap">
                                 <h3>Total Revenue</h3>
                                 <form action="#">
                                    <div class="select_option clearfix m-0">
                                       <select>
                                          <option data-display="Select">Nothing</option>
                                          <option value="1" selected>Last 1 Year</option>
                                          <option value="2">Last 2 Year</option>
                                          <option value="3">Last 3 Year</option>
                                          <option value="4">Last 4 Year</option>
                                       </select>
                                    </div>
                                 </form>
                              </div>
                              <div class="image-container">
                               <img src="./img/chart.png" >
                              </div>
                           </div>



                         
                        </div>

                        <div class="tab-pane fade" id="tab_products" role="tabpanel">
                           <div class="trending_products">
                              <div class="vd_title_wrap">
                                 <h3>categories</h3>
                                 <button type="button" class="btn custom_btn"><i class="far fa-plus"></i> Add
                                    Categore</button>
                              </div>
                              <div class="vd_shadow p-0">
                                 <div class="vd_table table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>category Image</th>
                                             <th>category Name</th>
                                             
                                           
                                             <th>Edit/Delete</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="./img/service-1.jpg" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Carpenter
                                                </h4>
                                             </td>
                                             <td>
                                            
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                   
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="./img/service-2.jpg" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Electrical
                                                </h4>
                                             </td>
                                             <td>
                                             
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                 
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="./img/service-3.jpg" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Painting
                                                </h4>
                                             </td>
                                        
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                  
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="item_image">
                                                   <img src="./img/service-4.jpg" alt="image_not_found">
                                                </div>
                                             </td>
                                             <td>
                                                <h4 class="item_title"><a href="shop-list.html"></a>Plumping
                                                </h4>
                                             </td>
                                           
                                             <td>
                                                <ul class="btns_group ul_li">
                                                   <li>
                                                      <button type="button" class="bg_green">
                                                         <i class="fas fa-edit"></i>
                                                      </button>
                                                
                                                      <button type="button" class="bg_orange">
                                                         <i class="fas fa-trash-alt"></i>
                                                      </button>
                                                   </li>
                                                </ul>
                                             </td>
                                          </tr>
                                          
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="tab_orders" role="tabpanel">
                           <div class="recent_orders">
                              <div class="vd_title_wrap">
                                 <h3>Orders</h3>
                                 <!-- <button type="button" class="btn custom_btn"><i class="far fa-plus"></i> Add
                                    Product</button> -->
                              </div>
                              <div class="vd_shadow p-0">
                                 <div class="vd_table table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Order ID</th>
                                             <th>Service</th>
                                             <th>Date</th>
                                             <th>Price</th>
                                             <th>Status</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Painting</span></td>
                                             <td><span>14/8/2023</span></td>
                                             <td><span>50JD</span></td>
                                             <td><span class="status_btn bg_green">Done</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Electrical</span></td>
                                             <td><span>20/8/2023</span></td>
                                             <td><span>20JD</span></td>
                                             <td><span class="status_btn bg_green">Done</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Painting</span></td>
                                             <td><span>4/9/2023</span></td>
                                             <td><span>30JD</span></td>
                                             <td><span class="status_btn bg_blue">Pending</span></td>
                                          </tr>
                                          <tr>
                                             <td><span>#02345</span></td>
                                             <td><span>Plumping</span></td>
                                             <td><span>1/9/20233</span></td>
                                             <td><span>15JD</span></td>
                                             <td><span class="status_btn bg_orange">Canceled</span></td>
                                          </tr>
                                       
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="tab_profile" role="tabpanel">
                           <div class="profile_table">
                              <div class="vd_title_wrap">
                                 <h3>Profile</h3>
                                 <!-- <button type="button" class="btn custom_btn"><i class="far fa-plus"></i> Add
                                    Product</button> -->
                              </div>
                              <div class="vd_shadow p-0">
                                 <div class="vd_table table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Profile</th>
                                             <th>Edit</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td><span><strong>Company Name</strong></span></td>
                                             <td><span>HomeFix</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Email Address</strong></span></td>
                                             <td><span>info@HomeFix.Com</span></td>
                                          </tr>
                           
                                          <tr>
                                             <td><span><strong>Year Established</strong></span></td>
                                             <td><span>2023</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Total Pro</strong></span></td>
                                             <td><span>512</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Category</strong></span></td>
                                             <td><span>Home Services</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>City</strong></span></td>
                                             <td><span>Irbid</span></td>
                                          </tr>
                                          <tr>
                                             <td><span><strong>Street Address</strong></span></td>
                                             <td><span>49 Eidon Springs Road</span></td>
                                          </tr>
                                        
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="tab_settings" role="tabpanel">
                           <div class="vd_shadow p-0">
                              <div class="vd_account_settings">
                                 <h3 class="wrap_title">Notifications</h3>
                                 <form action="#">
                                    <ul class="radio_btns_list ul_li_block">
                                       <li>
                                          <div class="radio_item">
                                             <input id="allow_desktop_notifications" type="radio"
                                                name="notifications_radio">
                                             <label for="allow_desktop_notifications">Allow Desktop
                                                Notifications</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="email_radio" type="radio" name="notifications_radio">
                                             <label for="email_radio">Mark.Enderess@Mail.Com</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="downers_grove_il" type="radio" name="notifications_radio">
                                             <label for="downers_grove_il">Downers Grove, IL</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="year" type="radio" name="notifications_radio">
                                             <label for="year">2018</label>
                                          </div>
                                       </li>
                                    </ul>
                                 </form>
                              </div>

                              <div class="vd_account_settings">
                                 <h3 class="wrap_title">Deactivate Account</h3>
                                 <form action="#">
                                    <ul class="radio_btns_list ul_li_block">
                                       <li>
                                          <div class="radio_item">
                                             <input id="clothing" type="radio" name="deactivate_account_radio">
                                             <label for="clothing">Clothing</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="address_radio" type="radio" name="deactivate_account_radio"
                                                checked>
                                             <label for="address_radio">549 Sulphur Springs Road</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="downers_grove_il2" type="radio" name="deactivate_account_radio">
                                             <label for="downers_grove_il2">Downers Grove, IL</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="order_id" type="radio" name="deactivate_account_radio">
                                             <label for="order_id">60515</label>
                                          </div>
                                       </li>
                                       <li>
                                          <button type="button" class="btn custom_btn">Deactivate Account</button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>

                              <div class="vd_account_settings">
                                 <h3 class="wrap_title">Delete Account</h3>
                                 <form action="#">
                                    <ul class="radio_btns_list ul_li_block">
                                       <li>
                                          <div class="radio_item">
                                             <input id="clothing2" type="radio" name="delete_account_radio">
                                             <label for="clothing2">Clothing</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="address_radio2" type="radio" name="delete_account_radio">
                                             <label for="address_radio2">549 Sulphur Springs Road</label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_item">
                                             <input id="downers_grove_il3" type="radio" name="delete_account_radio">
                                             <label for="downers_grove_il3">Downers Grove, IL</label>
                                          </div>
                                       </li>
                                       <li>
                                          <button type="button" class="btn custom_btn">Delete Account</button>
                                       </li>
                                    </ul>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- vendor_dashboard_section - end -->


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