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
   <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="css/vendor/themify-icons.css">
    <link rel="stylesheet" href="css/vendor/customFonts.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="css/plugins/select2.min.css">
    <link rel="stylesheet" href="css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="css/plugins/swiper.min.css">
    <link rel="stylesheet" href="css/plugins/nice-select.css">
    <link rel="stylesheet" href="css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="css/plugins/photoswipe.css">
    <link rel="stylesheet" href="css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="css/plugins/slick.css">  

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/choosepro.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="css/style.min.css">
    <style>
         .bg-image {
    /* background-image: url("./img/bg.jpg");
    background-repeat: no-repeat;
    background-size: cover; */
    background-color: rgba(254, 254, 73, 0.712);
}

        .expert-card {
           height: 550px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            padding:20px; 
        
        }
        
        .expert-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }
        
        .expert-thumb img {
            width:200px;
        
        
        }
        
        
        .expert h6.title {
            margin: 10px 0;
            color: #AB7442;
            font-size: 20px; 
        }
        
        .expert-rating {
            color: #AB7442;
            margin-bottom: 8px;
        }
        
        .stars {
            color: #ffe645;
            font-size: 30px;
        }
        
        .expert-description {
            color: #666;
            margin-bottom: 15px; 
            font-size: 16px; 
        }
        
        .expert-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center; 
        }
        
        .expert-button {
            background-color: #AB7442;
            color: #fff;
            padding: 8px 15px; 
            border-radius: 5px; 
            text-decoration: none;
            transition: background-color 0.3s;
            flex-grow: 1;
            text-align: center;
        
        }
        
        .expert-button:last-child {
            margin-left: 10px; 
        }
        
        .expert-button:hover {
            background-color: #AB7442;
            color: white;
        }
        
        
        </style>
    
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
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="carpenter.html" class="dropdown-item">Carpenter</a>
                    <a href="electrical.html" class="dropdown-item">Electrical</a>
                    <a href="painting.html" class="dropdown-item active">Painting</a>
                    <a href="plumbing.html" class="dropdown-item">Plumbing</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link">Courses</a>
            <a href="" class="nav-item nav-link">Join us</a>
        
        </div>
        <a href="Login.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="border-radius: 0px; margin-bottom: 0%;">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->



     <!-- Page Header Start -->
 <div class="container-fluid page-header2 py-5 mb-6">
    <div class="container py-5 d-flex justify-content-center flex-column">
      <h1 class="display-3 text-white mb-3 animated slideInDown"> Choose Profissional</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Painting service
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Choose Profissional
          </li>
        </ol>
      </nav>
    </div>
  </div>

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button class="active" data-filter="*">all</button>
                            <button data-filter=".featured">Irbid</button>
                            <button data-filter=".new">Amman</button>
                            <button data-filter=".sales">Aqaba</button>
                        </div>
                    </div>
                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls">

                            <li>
                                <div class="product-sorting">
                                    <select class="nice-select">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle active hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>
                            <li>
                                <a class="product-filter-toggle" href="#product-filter">Filters</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <!-- Product Filter Start -->
        <div id="product-filter" class="product-filter bg-light">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">

                    <!-- Sort by Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Sort by</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: low to high</a></li>
                            <li><a href="#">Price: high to low</a></li>
                        </ul>
                    </div>
                    <!-- Sort by End -->

                    <!-- Price filter Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Price filter</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li> <a href="#">All</a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">JD</span>0.00</span> - <span class="amount"><span class="cur-symbol">£</span>80.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>80.00</span> - <span class="amount"><span class="cur-symbol">£</span>160.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>160.00</span> - <span class="amount"><span class="cur-symbol">£</span>240.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>240.00</span> - <span class="amount"><span class="cur-symbol">£</span>320.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>320.00</span> +</a></li>
                        </ul>
                    </div>

                    <!-- Price filter End -->
               
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Avalible days filter</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Sunday</a></li>
                            <li><a href="#">Monday </a></li>
                            <li><a href="#">Tusedsy</a></li>
                            <li><a href="#">Wednesday</a></li>
                            <li><a href="#">Thursday</a></li>
                            <li><a href="#">Friday</a></li>
                            <li><a href="#">Saturday</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!-- Product Filter End -->

        <div class="section learts-mt-70">
            <div class="container">
                <!-- Products Start -->
                <div class="section learts-mt-70">
                    <div class="container">
                        <!-- Products Start -->
                        <div id="shop-products" class="products isotope-grid row row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
        
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="./img/pro1.png"  style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">Omar Mohammad</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                       
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: Irbid , price 5JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <a href="profissionalPage.html" class="expert-button">More Info</a>
                                        </div>
                                      
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
        
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="./img/pro2.png" style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">Fouad Salah</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                     
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: Aqaba  , price 7JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <a href="profissionalPage.html" class="expert-button">More Info</a>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="./img/pro3.png" style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">Eman Hazam</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                     
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: Amman , price 10JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <a href="profissionalPage.html" class="expert-button">More Info</a>
                                        </div>
                                     
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="./img/team-4.jpg"  style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">Omar Mohammad</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                       
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: Irbid , price 6JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <a href="profissionalPage.html" class="expert-button">More Info</a>
                                        </div>
                                      
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
        
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="./img/team-2.jpg" style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">Fouad Salah</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                     
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: Aqaba , price 5JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <a href="profissionalPage.html" class="expert-button">More Info</a>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="./img/team-1.jpg" style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">Eman Hazam</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                     
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: Amman , price 7JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <a href="profissionalPage.html" class="expert-button">More Info</a>
                                        </div>
                                     
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                      
                 
                            
                        </div>
                        <!-- Products End -->
                        <div class="pages mt-5">
                            <center>
                                <i class="fa-solid fa-chevron-left fa-2xl" style="color: #672905;"></i>
                                <button type="button"  class="btn pagebtn ">1</button>
                                <button type="button"  class="btn pagebtn">2</button> 
                                <i class="fa-solid fa-ellipsis" style="color: rgb(101, 53, 14);"></i>
                                <button type="button" class="btn pagebtn">15</button>
                                <i class="fa-solid fa-chevron-right fa-2xl" style="color: #682904;"></i>
                            </center>
                              </div>
                    </div>
                </div>
        
            </div>



















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
  
     <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/plugins/jquery.nice-select.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/swiper.min.js"></script>
    <script src="js/plugins/slick.min.js"></script>
    <script src="js/plugins/mo.min.js"></script>
    <script src="js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="js/plugins/jquery.countdown.min.js"></script>
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="js/plugins/isotope.pkgd.min.js"></script>
    <script src="js/plugins/jquery.matchHeight-min.js"></script>
    <script src="js/plugins/ion.rangeSlider.min.js"></script>
    <script src="js/plugins/photoswipe.min.js"></script>
    <script src="js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="js/plugins/jquery.zoom.min.js"></script>
    <script src="js/plugins/ResizeSensor.js"></script>
    <script src="js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="js/plugins/product360.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/jquery.scrollUp.min.js"></script>
    <script src="js/plugins/scrollax.min.js"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="main.js"></script>
  

  </body>
</html>