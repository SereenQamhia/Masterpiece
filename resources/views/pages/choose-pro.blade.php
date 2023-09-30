@extends('layout.master')

@section('content')

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

  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="css/style.min.css">
  

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
        
 
                            @foreach ($professionals as $pro)
                            <div class="grid-sizer col-1"></div>
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="{{ url('/img/' . $pro->image) }}"  style="height: 300px;border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h5><a href="profissionalPage.html">{{$pro->name}}</a></h5>
                                        <span class="rating">4.5</span>
                                        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                       
                                        <p class="expert-location">
                                            <i class="fas fa-map-marker-alt" style="color: #ffa411;"></i> Location: {{$pro->location}} , price {{$pro->price}}JD per meter
                                        </p>         
                                        <div class="expert-buttons">
                                            <form method="POST" action="{{ route('pro') }}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$pro->id}}">
                                                <button class="expert-button" type="submit">More Info</button>
                                            </form>
                                        </div>
                                      
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach







                            {{-- <div class="grid-sizer col-1"></div>
        
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
                             --}}
                      
                 
                            
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
 
    <script src="main.js"></script>
  
@endsection