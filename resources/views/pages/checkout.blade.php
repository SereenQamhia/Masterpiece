@extends('layout.master')

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header2 py-5 mb-6">
  <div class="container py-5 d-flex justify-content-center flex-column">
    <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif" >Checkout</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-white" href="#">Home</a>
        </li>
    
        <li class="breadcrumb-item text-white active" aria-current="page">
          Checkout
        </li>
      </ol>
    </nav>
  </div>
</div>

  <section class="cart_section clearfix" data-aos="fade-up" data-aos-duration="2000" >
    <div class="container">
      <!-- Billing info start -->
      <div class="billing_form mb_50">
        <h3 class="form_title mb_15" >Billing details</h3>
        <form action="#">
          <div class="form_wrap">
            <div class="row">
              <div class="col-lg-6">
                <div class="form_item">
                  <span class="input_title" >First Name<sup>*</sup></span>
                  <input type="text" name="firstname">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form_item">
                  <span class="input_title">Last Name<sup>*</sup></span>
                  <input type="text" name="lastname">
                </div>
              </div>




              <div class="form_item col-lg-6">
                <span class="input_title">Address<sup>*</sup></span>
                <input type="text" name="address">
              </div>

              <div class="form_item col-lg-6">
                <span class="input_title">Town/City<sup>*</sup></span>
                <input type="text" name="city">
              </div>

              <div class="form_item col-lg-6">
                <span class="input_title">County<sup>*</sup></span>
                <input type="text" name="county">
              </div>

              <div class="form_item col-lg-6">
                <span class="input_title">Building<sup>*</sup></span>
                <input type="text" name="postcode">
              </div>

              <div class="form_item col-lg-6">
                <span class="input_title">Phone<sup>*</sup></span>
                <input type="tel" name="phone">
              </div>

              <div class="form_item col-lg-6">
                <span class="input_title">Email Address<sup>*</sup></span>
                <input type="email" name="email">
              </div>
            </div>


            <hr>



            <div class="form_item mb-0 col-lg-12 " >
              <span class="input_title">Order notes<sup>*</sup></span>
              <input type="text" placeholder="Note about your order, eg. special notes fordelivery.">

            </div>
          </div>
        </form>


        <div class=" mt-5 " >

          <div class="mb-4" >

            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">Confirm order and pay</h2>

          </div>

          <div class="row">

            <div class="col-md-7">


              <div class="card p-3" style="font-family: Georgia, 'Times New Roman', Times, serif; border: 2px solid #83b0a1;">

                <h6 class="text-uppercase">Payment details</h6>
                <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required">
                  <span>Name on card</span> </div>


                <div class="row">

                  <div class="col-md-6">

                    <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control"
                        required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span>


                    </div>


                  </div>

                  <div class="col-md-6">

                    <div class="d-flex flex-row">


                      <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control"
                          required="required"> <span>Expiry</span> </div>

                      <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control"
                          required="required"> <span>CVV</span> </div>

                    </div>
                  </div>
                </div>
              </div>




            </div>


            <div class="col-md-5" >
              <div class="card p-2" style="font-family: Georgia, 'Times New Roman', Times, serif ; border: 2px solid #83b0a1; height: 100%;">
                <h5 class="text-uppercase p-2" >Service details</h5>
              <h5 class=" p-2 ">Painting service - Omar Mohammad</h5>
              <h6 class=" px-2"> {{ $booking->day }} at {{ $booking->time }} <br> (4hr)</h6>

 

            </div>
          </div>
          <button class="btn btn-lg p-2 mt-5 mx-auto placeOrder" >Place Order</button>

          </div>


        </div>





      </div>
      </form>
    </div>
    </div>
    </div>
  </section>

  </main>

  <!-- main body end -->

@endsection