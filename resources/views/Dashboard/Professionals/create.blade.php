@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

      <div style="margin: 30px ">
         <h2 class="text-center">Add Professional</h2>
         <form method="post" action="{{ route('Professionals.store') }}" enctype="multipart/form-data" id="signup-form" class="signup-form">
            @csrf
            @method('post')
        
            <div class="form-group">
                <label for="name">Professional Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                <span style="color:red">@error('name'){{ $message }} @enderror</span>
            </div>
        
            <div class="form-group mt-4">
                <label for="image">His/Her Image:</label>
                <input name="image" type="file" class="form-control white-input" id="image">
                {{-- <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br> --}}
            </div>

            <div class="form-group">
                <label for="description"> About the professional :</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            </div>
        
            <div class="form-group">
                <label for="cv">CV:</label>
                <input type="file" class="form-control-file" id="cv" name="cv" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
            </div>
        
            <div class="form-group">
                <label for="experience">Experience:</label>
                <input type="text" class="form-control" id="experience" name="experience" placeholder="Experience">
            </div>
        
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Age">
            </div>
        
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
            </div>
        
            <div class="form-group">
                <label for="price">Price ber hour:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
        
            <div class="form-group">
                <label for="profission">Profession:</label>
                <input type="text" class="form-control" id="profission" name="profission" placeholder="Profession">
            </div>
        
            <div class="form-group">
                <label for="hoursofwork">Hours of Work:</label>
                <input type="text" class="form-control" id="hoursofwork" name="hoursofwork" placeholder="10am , 11am , ..">
            </div>
        
            <div class="form-group">
                <label for="daysofwork">Days of Work:</label>
                <input type="text" class="form-control" id="daysofwork" name="daysofwork" placeholder="Sunday , Monday , ..">
            </div>
        
            <div class="form-group">
                <label for="completed_jobs">Completed Jobs:</label>
                <input type="text" class="form-control" id="completed_jobs" name="completed_jobs" placeholder="33">
            </div>
        
            {{-- <div class="form-group">
                <label for="provider_id">Provider ID:</label>
                <input type="text" class="form-control" id="provider_id" name="provider_id" placeholder="Provider ID">
            </div> --}}

            <div class="form-group">
                <label for="provider_id">Provider:</label>
                 <select class="form-control" id="provider_id" name="provider_id" placeholder="Provider ID">
                  @foreach ($Providers as $provider)
                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                    @endforeach
                 </select>
            </div> 
        
     
            <br>
           <h3>Previous works images:</h3> 
          
    <div class="form-group">
        <label for="image1">Image 1:</label>
        <input name="image1" type="file" class="form-control white-input" id="image1">
    </div>

    <div class="form-group">
        <label for="image2">Image 2:</label>
        <input name="image2" type="file" class="form-control white-input" id="image2">
    </div>

    <div class="form-group">
        <label for="image3">Image 3:</label>
        <input name="image3" type="file" class="form-control white-input" id="image3">
    </div>

    <div class="form-group">
        <label for="image4">Image 4:</label>
        <input name="image4" type="file" class="form-control white-input" id="image4">
    </div>

    <div class="form-group">
        <label for="image5">Image 5:</label>
        <input name="image5" type="file" class="form-control white-input" id="image5">
    </div>

    <div class="form-group">
        <label for="image6">Image 6:</label>
        <input name="image6" type="file" class="form-control white-input" id="image6">
    </div>

    <input type="submit" name="submit" id="submit" class="btn btn-success " style="margin: 1% 40%" value="Add Professional" />
</form>
           
        
               </div>
           </div>
 


           @endsection