@extends('layout.master')

@section('content')

   <!-- Vendor CSS (Bootstrap & Icon Font) -->
<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/vendor/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/vendor/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/vendor/customFonts.css') }}">

<!-- Plugins CSS (All Plugins Files) -->
<link rel="stylesheet" href="{{ asset('css/plugins/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/ion.rangeSlider.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/photoswipe.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/photoswipe-default-skin.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/slick.css') }}">  

<!-- Google Fonts -->
<link rel="stylesheet" href="https:fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

<!-- Your Custom Stylesheet (if it's a custom stylesheet) -->
<link rel="stylesheet" href="{{ asset('css/style.min.css') }}">



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
                            <form action="{{ route('choosepro', ['id' => request()->route('id')]) }}" method="GET">
                                @csrf
                            <button name="locations[]" value="all" class="{{ in_array('all', (array) request('locations')) ? 'active' : '' }}" >all</button>
                          </form>
                            <form action="{{ route('choosepro', ['id' => request()->route('id')]) }}" method="GET">
                                @csrf
                            <button name="locations[]" value="Irbid" class="{{ in_array('Irbid', (array) request('locations')) ? 'active' : '' }}" >Irbid</button>
                          </form>
                          <form action="{{ route('choosepro', ['id' => request()->route('id')]) }}" method="GET">
                            @csrf
                            <button name="locations[]" value="Amman" class="{{ in_array('Amman', (array) request('locations')) ? 'active' : '' }}">Amman</button>
                        </form>
                      <form action="{{ route('choosepro', ['id' => request()->route('id')]) }}" method="GET">
                        @csrf
                    <button name="locations[]" value="Aqaba" class="{{ in_array('Aqaba', (array) request('locations')) ? 'active' : '' }}" >Aqaba</button>
                  </form>
                       
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
                                <a class="product-filter-toggle" href="javascript:void(0);" onclick="toggleFilterSection()">Filters</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <div id="product-filter" class="product-filter bg-light" style="display: none; height: 450px">
            <div class="container">
                <form action="{{ route('choosepro', ['id' => request()->route('id')]) }}" method="GET">
                    @csrf
        
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">
                        <!-- Sort by Start -->
                        <div class="col learts-mb-30">
                            <h3 class="widget-title product-filter-widget-title">Sort by</h3>
                            <ul class="widget-list product-filter-widget customScroll">
                                <select name="sort_by">
                                    <option value="popularity">Popularity</option>
                                    <option value="price_low_to_high">Price: Low to High</option>
                                    <option value="price_high_to_low">Price: High to Low</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Sort by End -->
        
                   
        
                        <!-- Location Filter -->
                        <div class="col learts-mb-30">
                            <h3 class="widget-title product-filter-widget-title">Location filter</h3>
                            <ul class="widget-list product-filter-widget customScroll">
                                <label>Location:</label>
                                <input type="checkbox" name="locations[]" value="Irbid"> Irbid <br>
                                <input type="checkbox" name="locations[]" value="Amman"> Amman  <br>
                                <input type="checkbox" name="locations[]" value="Aqaba"> Aqaba
                            </ul>
                        </div>
        
                        <!-- Gender Filter -->
                        <div class="col learts-mb-30">
                            <h3 class ="widget-title product-filter-widget-title">Gender filter</h3>
                            <ul class="widget-list product-filter-widget customScroll">
                                <label>Gender:</label>
                                <input type="checkbox" name="genders[]" value="Male"> Male <br>
                                <input type="checkbox" name="genders[]" value="Female"> Female
                            </ul>
                        </div>
        
                        <!-- Experience Filter -->
                        <div class="col learts-mb-30">
                            <h3 class="widget-title product-filter-widget-title">Experience filter</h3>
                            <ul class="widget-list product-filter-widget customScroll">
                                <label for="experience">Experience Range:</label>
                                <input type="range" id="experience" name="experience" min="0" max="40" step="1" value="0">
                                <output for="experience">0</output> years
                            </ul>
                        </div>
                        
                    </div>
        
                    <!-- Add a submit button to apply filters -->
                    <button type="submit">Apply Filters</button>
                </form>
            </div>
        </div>
   

        <div class="section learts-mt-70">
            <div class="container">
                <!-- Products Start -->
                <div class="section learts-mt-70">
                    <div class="container">
                        <!-- Products Start -->
                        <div id="shop-products" class="products isotope-grid row row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
        
 
                            @foreach ($professionals as $pro)
                        
        
                            <div class="grid-item col featured">
                                <div class="expert-card">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="profissionalPage.html" class="image">
                                            <img src="{{ url('img/' . $pro->image) }}"  style="height: 300px;border-radius: 10px;">
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
                                            <a class="fw-medium mx-auto" href="{{ route('pro' ,$pro->id) }}">More Info<i class="fa fa-arrow-right ms-2"></i></a>

                                        </div>
                                      
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach


                            
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
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('js/plugins/mo.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('js/plugins/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('js/plugins/photoswipe.min.js') }}"></script>
<script src="{{ asset('js/plugins/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('js/plugins/ResizeSensor.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('js/plugins/product360.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/plugins/scrollax.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

<script>
    function toggleFilterSection() {
        var filterSection = document.getElementById('product-filter');
        if (filterSection.style.display === 'none' || filterSection.style.display === '') {
            filterSection.style.display = 'block';
        } else {
            filterSection.style.display = 'none';
        }
    }

    const experienceInput = document.getElementById("experience");
    const experienceOutput = document.querySelector("output[for='experience']");

    experienceInput.addEventListener("input", function () {
        experienceOutput.textContent = experienceInput.value ;
    });

</script>

@endsection