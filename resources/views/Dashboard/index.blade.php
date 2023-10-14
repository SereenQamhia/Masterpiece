@extends('Dashboard.master')



@section('content')
                        <div class="tab-pane fade show active" id="tab_dashboard" role="tabpanel">
                           <div class="row">
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('./img/funfact_bg_1.png');" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="item_content">
                                       <h3>Total Services</h3>
                                       <span>4</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('./img/funfact_bg_2.png');" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="item_content">
                                       <h3>Vendors</h3>
                                       <span>65</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-lg-4">
                                 <div class="funfact_item"
                                    style="background-image: url('./img/funfact_bg_3.png');" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="item_content">
                                       <h3>Ordered Services</h3>
                                       <span>198</span>
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











         <!-- vendor_dashboard_section - end -->
@endsection