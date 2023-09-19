@extends('layout.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header2 py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif" >About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              About
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

                <!-- product section-2 start -->
                <section class="product_section_2 sec_space_small" data-aos="fade-up" data-aos-duration="2000">
                  <div class="product_section_2_wrap" style="margin-top: 120px;">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="product_gallery aboutimge">
                                      <img style="width:100%;" src="./img/about.jpg" alt="image_not_found">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="product_section_content about_section_content">
                                      <div class="product_sec_sub_title d-flex align-items-center pb-2">
                                          <i class="far fa-circle"></i>
                                          <i class="far fa-circle"></i>
                                          <i class="far fa-circle"></i>
                                          <span class="ps-1">Greetings from HomeFix</span>
                                      </div>
                                      <div class="product_section_title text-effect py-2">
                                          <h2> Where Quality and <font><span>T</span><span>r</span><span>u</span><span>s</span><span>t</span></font> Craftsmanship Unite!</h2>
                                      </div>
                                      <div class="product_section_subtitle position-relative">
                                          <p class="pb-0">We believe that a well-maintained home is a happy home.</p>
                                      </div>
                                      <div class="product_section_desc">
                                          <p> We understand the importance of having a safe, comfortable, and aesthetically pleasing living space. With a passion for craftsmanship and a commitment to excellence, we offer a range of professional home improvement services that cater to all your needs.</p>
                                      </div>
                                      <div class="product_section_btn">
                                          <a href="#!"><button type="button" class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">Subscribe <i class="fas fa-long-arrow-alt-right"></i></button></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- product section-2 end -->
              
              <!-- category section start -->
              <section class="category_section sec_ptb_100 position-relative overflow-hidden clearfix" style="background-image: url(assets/images/backgrounds/bg11.png);" data-aos="fade-up" data-aos-duration="2000">
                  <div class="category_section_wrap">
                      <div class="container">
                          <div class="row">
                              <div class="category_top_content">
                                  <div class="category_top_content_text d-flex flex-column justify-content-center align-items-center">
                                    <div class="section-title text-center ">
                                      <h1 class="display-5 mb-5 " style="margin-top: 100px;">Our Services</h1>
                                  </div>
                                     
                                  </div>
                                
                              </div>
                              <div class="row category_slick slideshow1_slider clearfix   px-0" data-slick='{"dots": false}'>
                                  <div class=" col-3 item_content slider_item" data-aos="fade-up" data-aos-duration="300">
                                      <a href="shop-list.html" target="_blank">
                                          <div class="item_image_content overflow-hidden position-relative">
                                              <img src="./img/service-1.jpg" alt="image_not_found">
                                              <h6 class="item_title position-absolute rounded-pill">Carpinatery</h6>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-3 item_content slider_item" data-aos="fade-up" data-aos-duration="600">
                                      <a href="shop-list.html" target="_blank">
                                          <div class="item_image_content overflow-hidden position-relative">
                                              <img src="./img/service-2.jpg"  alt="image_not_found">
                                              <h6 class="item_title position-absolute rounded-pill">Electrical</h6>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-3 item_content slider_item" data-aos="fade-up" data-aos-duration="900">
                                      <a href="shop-list.html" target="_blank">
                                          <div class="item_image_content overflow-hidden position-relative">
                                              <img src="./img/service-3.jpg"  alt="image_not_found">
                                              <h6 class="item_title position-absolute rounded-pill">Painting</h6>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="col-3 item_content slider_item" data-aos="fade-up" data-aos-duration="900">
                                    <a href="shop-list.html" target="_blank">
                                        <div class="item_image_content overflow-hidden position-relative">
                                            <img src="./img/service-4.jpg"  alt="image_not_found">
                                            <h6 class="item_title position-absolute rounded-pill">Plumping</h6>
                                        </div>
                                    </a>
                                </div>
                                
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- category banner side image start -->
                  <img class="category_left_thumb position-absolute" src="assets/images/shapes/shape3.png" alt="image_not_found">
                  <!-- category banner side image end -->
              </section>
              <!-- category section end -->
              
              <!-- product_8 section start -->
              <section class="product8_sec sec_ptb_100" data-aos="fade-up" data-aos-duration="2000">
                  <div class="product8_sec_wrap">
                      <div class="container-sm">
                          <div class="team_top_content text-center">
                            <div class="section-title text-center">
                              <h1 class="display-5 mb-4 " style="margin-top: 120px;">Why Choose us</h1>
                          </div>
                            
                              <div class="d-flex justify-content-center align-items-center">
                                  <ul class="product_tabnav_4 nav nav-pills my-4" id="pills-tab" role="tablist">
                                      <li class="nav-item" role="presentation">
                                          <button class="nav-link first_btn text-uppercase" id="pills-natural-tab" data-bs-toggle="pill" data-bs-target="#pills-natural" type="button" role="tab" aria-controls="pills-natural" aria-selected="true"> Unparalleled Expertise</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                          <button class="nav-link active text-uppercase" id="pills-handmade-tab" data-bs-toggle="pill" data-bs-target="#pills-handmade" type="button" role="tab" aria-controls="pills-handmade" aria-selected="false"> Excellence in Quality</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                          <button class="nav-link last_btn text-uppercase" id="pills-curated-tab" data-bs-toggle="pill" data-bs-target="#pills-curated" type="button" role="tab" aria-controls="pills-curated" aria-selected="false">Empowering Education</button>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show" id="pills-natural" role="tabpanel" aria-labelledby="pills-natural-tab">
                                  <div class="row mt-5">
                                      <div class="col-lg-4">
                                          <div class="product8_gallery">
                                              <img style="width: fit-content;" src="./img/expert.JPG" alt="image_not_found">
                                          </div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="product7_cont position-relative" style="width: fit-content;">
                                    
                                              <div class="banner_title banner_title3 text-effect">
                                                  <h2>Your Trusted Partner for Unparalleled Home <font>
                                                      <span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span>
                                                   </font></h2>
                                              </div>
                                              <div class="banner_desc py-3">
                                                  <p>Our team is a collective of seasoned professionals, each with a wealth of experience and a passion for innovation. We don't just take on projects; we approach them as opportunities to transform spaces. With years of dedicated service, we've honed our skills to an art form, ensuring that every stroke of paint, every piece of wood, every connection of wire, and every plumbing solution is executed flawlessly.</p>
                                              </div>
                                          </div>
                                       
                                        
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade show active" id="pills-handmade" role="tabpanel" aria-labelledby="pills-handmade-tab">
                                  <div class="row mt-5">
                                      <div class="col-lg-4">
                                          <div class="product8_gallery">
                                              <img style="width:fit-content;" src="./img/Quality.JPG" alt="image_not_found">
                                          </div>
                                      </div>
                                      <div class="col-lg-8" >
                                          <div class="product7_cont position-relative " style="width: fit-content;">
                                             
                                            <div class="banner_title banner_title3 text-effect">
                                              <h2>Your Trusted Partner for Unparalleled Home <font>
                                                  <span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span>
                                               </font></h2>
                                          </div>
                                              <div class="banner_desc py-3">
                                                  <p>At HomeFix, we've made quality our mantra. We don't settle for anything less than exceptional. Our commitment to delivering top-notch craftsmanship is unwavering. From the meticulous selection of materials to the precision in execution, we aim for perfection in every detail. Your satisfaction isn't just a goal; it's a standard we uphold with pride.</p>
                                              </div>
                                          </div>
                                       
                                         
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade show" id="pills-curated" role="tabpanel" aria-labelledby="pills-curated-tab">
                                  <div class="row mt-5">
                                      <div class="col-lg-4">
                                          <div class="product8_gallery ">
                                              <img style="width: fit-content;" src="./img/courses.png" alt="image_not_found">
                                          </div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="product7_cont position-relative" style="width: fit-content;">
                                              
                                              <div class="banner_title banner_title3 text-effect">
                                                <h2>Your Trusted Partner for Unparalleled Home <font>
                                                    <span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span>
                                                 </font></h2>
                                            </div>
                                              <div class="banner_desc py-3">
                                                  <p>What sets us apart is not just our tools, but our willingness to share knowledge. Our belief in the power of education drives us to empower you with insights. We don't just complete projects; we ensure you understand the 'why' and 'how' behind the choices we make. We're your partners in informed decision-making, guiding you towards a home that resonates with your vision and practical needs.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                  </div>
              </section>
              <!-- product_8 section end -->
              

          
     
          
         
          
          <!-- service section start -->
          <section class="service_setion sec_space_xs_70 " data-aos="fade-up" data-aos-duration="2000">
              <div class="service_content_wrap " style="margin-top: 120px;">
                  <div class="container">
                      <div class="row  mt-5">
                          <div class="col-6 col-md-3">
                              <div class="service_inner_content d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="500">
                                  <div class="service_content_icon rounded-pill me-2">
                                    <i class="fa-solid fa-wallet"></i>
                                  </div>
                                  <div class="service_content_text">
                                      <div class="service_content_title">
                                          <h6>Best price</h6>
                                      </div>
                                      <div class="service_content_sub_title">
                                          <span>Best delings with high quality</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-6 col-md-3">
                              <div class="service_inner_content d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                  <div class="service_content_icon rounded-pill me-2">
                                      <i class="fas fa-user-shield"></i>
                                  </div>
                                  <div class="service_content_text">
                                      <div class="service_content_title">
                                          <h6>Security Payment</h6>
                                      </div>
                                      <div class="service_content_sub_title">
                                          <span>100% security payment</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-6 col-md-3">
                              <div class="service_inner_content d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1500">
                                  <div class="service_content_icon rounded-pill me-2">
                                      <i class="fas fa-exchange-alt"></i>
                                  </div>
                                  <div class="service_content_text">
                                      <div class="service_content_title">
                                          <h6>Rescudule</h6>
                                      </div>
                                      <div class="service_content_sub_title">
                                          <span>Avelibelty of rescudule</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-6 col-md-3">
                              <div class="service_inner_content d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="2000">
                                  <div class="service_content_icon rounded-pill me-2">
                                    <i class="fa-solid fa-headset"></i>
                                  </div>
                                  <div class="service_content_text">
                                      <div class="service_content_title">
                                          <h6>24/7 Support</h6>
                                      </div>
                                      <div class="service_content_sub_title">
                                          <span>Support every time fast</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- service section end -->
          
          
      </main>
      <!-- main body end -->
   @endsection