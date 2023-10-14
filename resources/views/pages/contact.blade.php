@extends('layout.master')

@section('content')




    <!-- Page Header Start -->
    <div class="container-fluid page-header2 py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb" >
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- address-section start -->
 <section class="address_sec sec_space_small" data-aos="fade-up" data-aos-duration="2000">
    <div style="margin-top: 90px;" class="address_sec_wrap ">
        <div class="container-sm">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-right" data-aos-duration="2000">
                        <div class="address_author bg-white position-absolute">
                            <i  class="fas fa-user-tie fa-lg"></i>
                        </div>
                        <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <span class="text-uppercase px-3">GET TO KNOW</span>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                        </div>
                        <h4 class="address_title">About HomeFix</h4>
                        <p class="address_desc">We are a strong community of 100,000+ customers and 600+
                            Profissional </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-up" data-aos-duration="2000">
                        <div class="address_author bg-white position-absolute">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                        </div>
                        <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <span class="text-uppercase px-3">visit us</span>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                        </div>
                        <h4 class="address_title">Our Address</h4>
                        <p class="address_desc">Irbid , Eidon ,south YU</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-left" data-aos-duration="2000">
                        <div class="address_author2 bg-white position-absolute">
                            <i class="fas fa-phone-volume fa-lg"></i>
                        </div>
                        <div class="address_author3 bg-white position-absolute">
                            <i class="far fas fa-envelope fa-lg"></i>
                        </div>
                        <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <span class="text-uppercase px-3">Call or write</span>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                            <i class="far fa-circle"></i>
                        </div>
                        <h4 class="address_title">Phone & Email</h4>
                        <p class="address_desc">+962775578452 needhelp@HomeFix.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- address-section end -->

    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <p class="mb-4">We're here to assist you! If you have any questions, inquiries, or need support, please don't hesitate to reach out. Our dedicated team is ready to provide you with the information and assistance you need.</p>
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                        <form method="POST" action="{{ route('contact.us.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="name">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;" name="phone">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="subject" class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="Carpinter">Carpinter</option>
                                        <option value="Electrical">Electrical</option>
                                        <option value="Painting">Painting</option>
                                        <option value="Plumbing">Plumbing</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Your message" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid h-100" src="img/quote.png" style="object-fit: cover;width: fit-content;" alt="">                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection