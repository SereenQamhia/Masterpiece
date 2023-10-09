@extends('layout.master')

@section('content')
{{-- <link href="{{ asset('css/choosepro.css') }}" rel="stylesheet" /> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>

 <!-- Page Header Start -->
 <div class="container-fluid page-header2 py-5 mb-6">
  <div class="container py-5 d-flex justify-content-center flex-column">
    <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Georgia, 'Times New Roman', Times, serif">Profissional</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-white" href="#">Home</a>
        </li>
        <li class="breadcrumb-item text-white active" aria-current="page">
          Painting service
        </li>
        <li class="breadcrumb-item text-white active" aria-current="page">
          Profissional
        </li>
      </ol>
    </nav>
  </div>
</div>


<div style="margin: 0px 8%;">

<br><br>
    <div class="row" style=" color: black;">
<div class="col-7 row"  style="text-align: left;font-size: 20px">
    <div class="col-4">
    <img style="border-radius: 500px; width: 200px;height: 200px;" src="{{ url('img/' . $pro->image) }}" ></div>
    <div  class="col-6" style="padding-top: 25px;"> 
        <h2 style="font-size: 40px;">{{$pro->name}}</h2>
        <div><i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i>
            <i class="fa-solid fa-star " style="color: #f5ed05;"></i></div> 
            <img style=" width: 35px;" src="..\.\img\complited.svg">{{$pro->completed_jobs}} job complited<br>
        <i class="fa-solid fa-location-dot fa-lg" style="color: #ffba1a; padding: 10px;"></i>{{$pro->location}}
         </div> 
         <!-- <div  class="col-2">
            <button style="background-color: rgb(255, 214, 78); color: white;margin-top: 50px;" type="submit" class="btn btn-lg">Chat with Omar</button>

         </div> -->
         <center>
         <p style="text-align: left; padding-right: 100px;"><br>{{$pro->description}}</p>
         <ul style="text-align: left;">
            <li>+{{$pro->experience}} Years of expert</li>
            <li>{{$pro->price}}JD per meter</li>
            <li>{{$pro->age}} years old</li>
            <li>Profession in {{$pro->profission}}</li>
        </ul>
      
          <br><br>
          <h3>Images for Omar M. previous projects:</h3><br>
          <div class="row ">
          <img class="col-4" src="{{ url('img/' . $pro->image1) }}" alt="">
          <img class="col-4" src="{{ url('img/' . $pro->image2) }}" alt="">
          <img class="col-4" src="{{ url('img/' . $pro->image3) }}" alt=""> 
          </div> <br>
          <div class="row ">
          <img class="col-4" src="{{ url('img/' . $pro->image4) }}" alt="">
          <img class="col-4" src="{{ url('img/' . $pro->image5) }}" alt="">
          <img class="col-4" src="{{ url('img/' . $pro->image6) }}" alt="">
          
          
      </center>
</div>

<div class="col-5 schedule" style="text-align: left;font-size: 20px; padding:20px 0px 20px 50px;">
    <h2 style="color: #ffba1a;">Schedule now</h2> <br>
    <center> <h3>Tell us about the job </h3></center><br>
      <form method="post" action="{{route('Bookings')}}">
        @csrf
        @method('post')
        <input type="hidden" name="professional_id" value="{{$pro->id}}">
   
    <div>When would you like him to come?</div>
    {{-- <input style="width: 90%; height: 40px;" type="time"> <br>  --}}
    {{-- <input style="width: 90%; height: 40px;" type="date"> <br><br> --}}
    <select style="width: 90%; height: 35px;" name="selected_hours" id="selected_hours">
      @foreach($workHours as $hour)
          <option value="{{ $hour }}" @if(in_array($hour, $workHours)) selected @endif>{{ $hour }}</option>
      @endforeach
  </select>
  
  <select style="width: 90%; height: 35px;" name="selected_days" id="selected_days">
      @foreach($workDays as $day)
          <option value="{{ $day }}" @if(in_array($day, $workDays)) selected @endif>{{ $day }}</option>
      @endforeach
  </select>
  
    <br><br>
    <div>Will you provide tools eg:
        a paintbrush?</div>
        <select name="tools" id="" style="width: 90%; height: 35px;">
            <option value="no">NO</option>
            <option value="yes">Yes</option>
        </select> <br>
    <div ><i class="fa-solid fa-circle fa-2xs" style="color: #353535;"></i>  You will provide the paint</div> <br>

<div>Description:</div>
<input style="width: 90%; height: 250px;" type="text" placeholder="Please describe the job in detail (optional)" name="description"> <br><br>
<a >
<button style="background-color: rgb(171,116,66); color: white; margin-left:25% " type="submit" class="btn btn-lg mt-3">Complete booking</button></a>
</form> 



</div>




</div>

<hr class="mt-5" style="color: rgb(0, 0, 0); height: 3px;">
<br><br>

  <div class="tab-pane fade show" id="pills-reviews" role="tabpanel"
  aria-labelledby="pills-reviews-tab">
  <div class="row ">
    <div class=" col-lg-6  comment_form_area">
      <form action="{{ route('review') }}" method="POST">
        @csrf
        <input type="hidden" name="professional_id" value="{{$pro->id}}">
        <h3 class="title_text">Add New Comment</h3>
        <input type="hidden" name="rating" id="ratingInput" value="0" required>
        <div class="rating_input">
            <span class="rating_title" style="font-size:30px;">Rating:</span>
            <ul class="rating_stars" style="color: Green;">
                <a href="#" data-rating="1"><i id="star1" class="far fa-star fa-lg" style="color: #f5ac2e;"></i></a>
                <a href="#" data-rating="2"><i id="star2" class="far fa-star fa-lg" style="color: #f5ac2e;"></i></a>
                <a href="#" data-rating="3"><i id="star3" class="far fa-star fa-lg" style="color: #f5ac2e;"></i></a>
                <a href="#" data-rating="4"><i id="star4" class="far fa-star fa-lg" style="color: #f5ac2e;"></i></a>
                <a href="#" data-rating="5"><i id="star5" class="far fa-star fa-lg" style="color: #f5ac2e;"></i></a>
            </ul>
        </div>
        <div class="form_item m-auto">
            <textarea style="width: 500px; min-height: 150px; margin-left: 50px;" name="comment" placeholder="Your Comment*" required></textarea>
        </div>
        <center>
            <button style="background-color: rgb(205, 163, 124); color: white;" type="submit" class="btn btn-lg mt-4">Post Comment</button>
        </center>
    </form>
    </div>
      <div class="col-lg-6">
          <div class="review_comment2">
              <h3 class="title_text">Reviews:</h3>
              <div class="reviews-container" style="height: 300px; overflow: auto;">
            
                <ul class="review_comment_list2 ul_li_block">

                      @foreach ($Reviews as $Review)
                          <li class="review_comment_wrap2">
                              <h4 class="admin_name">{{$Review->user->name}} <span class="comment_date">{{$Review->created_at}}</span></h4>
                              <div>
                                @php
                                $x = $Review->rating; // Get the rating from the review
                            @endphp
                               
                                @for ($i =0; $i < $x; $i++)
                                <i class="fa-solid fa-star" style="color: #f5ed05;"></i>
                            @endfor
                              </div>
                              <p class="mb-0">
                                  {{$Review->review_text}}
                              </p>
                          </li> 
                      @endforeach
                    </ul>
              </div>
              
                  {{-- 
                      <p class="mb-0">
                        Omar was great! on time, detail oriented, knowledgable, and very nice. will definitely hire him in the future.
                      </p>
                 
                      <p class="mb-0">
                        Truly an amazing, multi-talented, detailed-oriented professional with a great attitude. I highly recommend him. Very thoughtful about the project, did amazing work.
                      </p>
                 --}}
           
          </div>
        </div>
       
     
  </div>
</div>

</div>

</div>
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    <script src="lib/purecounter/purecounter_vanilla.js"></script>
    
    <script>
      // JavaScript to handle star rating
      const stars = document.querySelectorAll(".rating_stars i");
      const ratingInput = document.getElementById("ratingInput");
  
      stars.forEach((star, index) => {
          star.addEventListener("click", () => {
              const rating = index + 1;
              ratingInput.value = rating;
              // Update star colors based on selected rating
              stars.forEach((s, i) => {
                  if (i < rating) {
                      s.classList.add("fas");
                      s.classList.remove("far");
                  } else {
                      s.classList.remove("fas");
                      s.classList.add("far");
                  }
              });
          });
      });
  </script>
@endsection
