@extends('layout.master')

@section('content')

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
                    <img src="{{  url('img/' . auth()->user()->image) }}" alt=""/>
                    {{-- <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="profile-head">
                            <h5>
                              {{ auth()->user()->name }}
                            </h5>
                          
                            <p class="proile-rating">RANKINGS : <span>9.5/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Membership</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" id="Schedule-tab" data-toggle="tab" href="#Schedule" role="tab" aria-controls="Schedule" aria-selected="false">Schedule</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
          
                <a  href="{{ route('profile.edit') }}"  type="submit" class="profile-edit-btn" name="btnAddMore" >Edit Profile</a>
           
            </div>
        </div>
        <div class="row mt-0" >
            <div class="col-md-4">
            
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent" > 
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                         
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ auth()->user()->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ auth()->user()->phone_number }}</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ auth()->user()->address }}</p>
                                    </div>
                                </div> 
                              
                              
                    </div>
                    {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                  
                    </div> --}}


                    <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Service</th>
                                <th scope="col">Profisional</th>
                                <th scope="col">Day</th>
                                <th scope="col">time</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                              $counter = 1; // Initialize the counter
                          @endphp
                              @foreach ($bookings as $booking)
                              <th scope="row">{{ $counter++ }}</th>
                              <td>{{$booking->professional->profission}}</td>
                              <td>{{$booking->professional->name}}</td>
                              <td>{{$booking->day}}</td>
                              <td>{{$booking->time}}</td>
                              <td>{{$booking->payment}}</td>
                              <td>
                                <form action="{{ route('cancel.booking', $booking->id) }}" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Cancel</button>
                                </form>
                            </td>
                            
                              @endforeach
                          
                            </tbody>
                          </table>
            </div>
                </div>
            </div>
        </div>
    </form>           
</div>

@endsection


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
