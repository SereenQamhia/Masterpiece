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
        
        <form role="form" action="{{ route('stripe.post') }}" method="POST" 
        class="require-validation" data-cc-on-file="false"
        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
        id="payment-form">

        @csrf
          <div class="form_wrap">
            <div class="row">
              <div class="form_item col-lg-6">
                <span class="input_title">Full Name<sup>*</sup></span>
                <input type="text" name="name" required>
            </div>

            <div class="form_item col-lg-6">
                <span class="input_title">City<sup>*</sup></span>
                <input type="text" name="city" value="{{$pro->location}}" required>
            </div>

            <div class="form_item col-lg-6">
                <span class="input_title">Address<sup>*</sup></span>
                <input type="text" name="address" required value="{{ auth()->user()->address }}">
            </div>

            <div class="form_item col-lg-6">
                <span class ="input_title">Building<sup>*</sup></span>
                <input type="text" name="building" required>
            </div>

            <div class="form_item col-lg-6">
                <span class="input_title">Phone<sup>*</sup></span>
                <input type="tel" name="phone" value="{{ auth()->user()->phone_number }}" required>
            </div>

            <div class="form_item col-lg-6">
                <span class="input_title">Email Address<sup>*</sup></span>
                <input type="email" name="email" value="{{ auth()->user()->email }}" required>
            </div>


            <hr>



            <div class="form_item mb-0 col-lg-12 " >
              <span class="input_title">Any notes<sup>*</sup></span>
              <input type="text" placeholder="Note about your order, eg. special notes fordelivery.">

            </div>
          </div>
          </div>


        <div class=" mt-5 " >

          <div class="mb-4" >

            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">Confirm order and pay</h2>

          </div>

          <div class="row">

            <div class="col-md-7">


              <div class="card p-3" style="font-family: Georgia, 'Times New Roman', Times, serif; border: 2px solid #83b0a1;">

                <h6 class="text-uppercase">Payment details</h6>
                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
                <div class="inputbox mt-3"> <input class='form-control' size='4' type='text' required="required">
                  <span>Name on card</span> </div>


                <div class="row">

                  <div class="col-md-6">

                    <div class="inputbox mt-3 mr-2">  <input
                      autocomplete='off' class='form-control card-number' size='20'
                      type='text' required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span>


                    </div>


                  </div>

                  <div class="col-md-6">

                    <div class="d-flex flex-row">


                      <div class="inputbox mt-3 mr-2"> <input
                        class='form-control card-expiry-month' placeholder='MM'
                        type='text' required="required"> <span>Expiry</span> </div>

                      <div class="inputbox mt-3 mr-2"> <input autocomplete='off'
                        class='form-control card-cvc' placeholder='ex. 311' 
                        type='text' required="required"> <span>CVV</span> </div>

                    </div>
                    {{-- <div class='col-xs-12 col-md-4 form-group expiration required'>
                      <label class='control-label'>Expiration Year</label> <input
                          class='form-control card-expiry-year' placeholder='YYYY' size='4'
                          type='text'>
                  </div> --}}
                  </div>
                </div>
              </div>




            </div>


            <div class="col-md-5" >
              <div class="card p-2" style="font-family: Georgia, 'Times New Roman', Times, serif ; border: 2px solid #83b0a1; height: 100%;">
                <h5 class="text-uppercase p-2" >Service details</h5>
              <h5 class=" p-2 ">{{$pro->profission}} - {{$pro->name}}</h5>
              <h6 class=" px-2"> {{ session('pending_booking.dselected_days') }} at {{ session('pending_booking.selected_hours') }}</h6>
              <h6 class=" px-2"> {{$pro->price}} ,its for confirming the booking and its count as the fees for the first hour ,if you cancel the booking it will be returnd  </h6>

 

            </div>
          </div>
          <button class="btn btn-lg p-2 mt-5 mx-auto placeOrder" type="submit" >Place Order</button>

          </div>


        </div>





      </div>
      </form>
    </div>
    </div>
    </div>
  </section>

  </main>


     
{{-- 
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default credit-card-box">
              <div class="panel-heading display-table" >
                      <h3 class="panel-title" >Payment Details</h3>
              </div>
              <div class="panel-body">
  
                  @if (Session::has('success'))
                      <div class="alert alert-success text-center">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                          <p>{{ Session::get('success') }}</p>
                      </div>
                  @endif
  
                  <form 
                          role="form" 
                          action="{{ route('stripe.post') }}" 
                          method="post" 
                          class="require-validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form">
                      @csrf
  
                      <div class='form-row row'>
                          <div class='col-xs-12 form-group required'>
                              <label class='control-label'>Name on Card</label> <input
                                  class='form-control' size='4' type='text'>
                          </div>
                      </div>
  
                      <div class='form-row row'>
                          <div class='col-xs-12 form-group card required'>
                              <label class='control-label'>Card Number</label> <input
                                  autocomplete='off' class='form-control card-number' size='20'
                                  type='text'>
                          </div>
                      </div>
  
                      <div class='form-row row'>
                          <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> <input autocomplete='off'
                                  class='form-control card-cvc' placeholder='ex. 311' size='4'
                                  type='text'>
                          </div>
                          <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> <input
                                  class='form-control card-expiry-month' placeholder='MM' size='2'
                                  type='text'>
                          </div>
                          <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> <input
                                  class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                  type='text'>
                          </div>
                      </div>
  
                      <div class='form-row row'>
                          <div class='col-md-12 error form-group hide'>
                              <div class='alert-danger alert'>Please correct the errors and try
                                  again.</div>
                          </div>
                      </div>
  
                      <div class="row">
                          <div class="col-xs-12">
                              <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                          </div>
                      </div>
                          
                  </form>
              </div>
          </div>        
      </div>
  </div> --}}
      
  <!-- main body end -->

@endsection

 
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>