@extends('layout.master')

@section('content')

  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  <style>
    .form-group {
        padding: 8px
    }
       /* Instructions Styling */
       .instructions-container {
    
        padding: 20px;
        
     
    }

    .instructions-heading {
        font-size: 20px;
        font-weight: bold;
        color: rgb(187, 121, 0);
        margin-bottom: 10px;
    }

    .instructions-list {
        margin-bottom: 15px;
    }

    .instructions-list li {
        margin-bottom: 8px;
    }
  </style>
    <div class="row" style="margin:3%;">
   <div class="col-md-12 col-lg-6 " style="margin-right:30px; border: solid rgb(187, 121, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

      <div style="margin: 10px ">
         <h2 class="text-center form-group" >Join Us as a Professional</h2>
         <form method="post" action="{{ route('join.store') }}" enctype="multipart/form-data" id="signup-form" class="signup-form">
            @csrf
            @method('post')
        
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                <span style="color:red">@error('name'){{ $message }} @enderror</span>
            </div>
        
            <div class="form-group ">
                <label for="image">Your Image:</label>
                <input name="image" type="file" class="form-control white-input" id="image">
                {{-- <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br> --}}
            </div>

            <div class="form-group">
                <label for="description"> Tell us about yourself and your expertise:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            </div>
        
            <div class="form-group">
                <label for="cv">Upload your CV:</label>
                <input type="file" class="form-control-file" id="cv" name="cv" required>
            </div>
        
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        
            <div class="form-group">
                <label for="location">Where Your Skills Shine (Your Location):</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location">
            </div>
        
            <div class="form-group">
                <label for="experience">Years of Mastering Your Craft:</label>
                <input type="number" class="form-control" id="experience" name="experience" placeholder="Experience">
            </div>
        
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Age">
            </div>
        
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="price">Price per Hour</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price">
            </div>
        
            <div class="form-group">
                <label for="profission">Crafting Your Identity (Your Profession):</label>
                <input type="text" class="form-control" id="profission" name="profission" placeholder="Profession">
            </div>
        
            <div class="form-group">
                <label for="hoursofwork">Your Professional Schedule (Hours of Work):</label>
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
       

            <div class="form-group">
                <label for="provider_id">Select the main service provider you are associated with:</label>
                 <select class="form-control" id="provider_id" name="provider_id" placeholder="Provider ID">
                  @foreach ($Providers as $provider)
                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                    @endforeach
                 </select>
            </div> 
        
     
            <br>
           <h3>Your Previous Works Images:</h3> 
          
    <div class="form-group">
        <input name="image1" type="file" class="form-control white-input" id="image1">
    </div>

    <div class="form-group">
   
        <input name="image2" type="file" class="form-control white-input" id="image2">
    </div>

    <div class="form-group">
    
        <input name="image3" type="file" class="form-control white-input" id="image3">
    </div>

    <div class="form-group">
        <input name="image4" type="file" class="form-control white-input" id="image4">
    </div>

    <div class="form-group">
        <input name="image5" type="file" class="form-control white-input" id="image5">
    </div>

    <div class="form-group">
        <input name="image6" type="file" class="form-control white-input" id="image6">
    </div>

    <input type="submit" name="submit" id="submit" class="btn" style="margin: 1% 40%;background-color:rgb(165, 95, 42); color:white" value="Submit Application" />
</form>
           
        
               </div>
           </div>


        <div class="col-md-12 col-lg-5"  style=" border: solid rgb(187, 121, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="instructions-container">
                <h3 class="instructions-heading">Instructions for Joining HomeFix as a Professional:</h3>
    
                <div class="instructions-list">
                    <li><strong>Professional Presentation:</strong> Craft your profile with care. Upload a professional image, and ensure your professional name and description accurately represent your skills and experience.</li>
    
                    <li><strong>Comprehensive CV:</strong> Your CV is a testament to your professional journey. Provide a detailed CV that highlights your qualifications and work history. This helps homeowners understand the depth of your expertise.</li>
                    
                    <li><strong>Email Communication:</strong> Make sure the email you provide is regularly monitored. This will be our primary mode of communication regarding your application status and potential homeowner inquiries.</li>
                    
                    <li><strong>Location Details:</strong> Specify your current location to help homeowners find professionals near them. This ensures that you are connected with relevant local service requests.</li>
                    
                    <li><strong>Experience and Age:</strong> Share the number of years you've dedicated to mastering your craft. While age is just a number, it can provide homeowners with insights into your wealth of experience.</li>
                    
                    <li><strong>Professional Essence:</strong> Briefly describe your professional essence, including your gender. This helps create an inclusive platform that celebrates diversity in the home services industry.</li>
                    
                    <li><strong>Pricing and Profession:</strong> Set a reasonable price per hour that reflects your professional worth. Clearly specify your profession, whether you're an electrician, carpenter, plumber, or another skilled professional.</li>
                    
                    <li><strong>Availability Details:</strong> Share your preferred hours and days of work. This ensures that homeowners can book your services when you're available, fostering a positive experience for both parties.</li>
                    
                    <li><strong>Completed Jobs:</strong> Highlight the number of successful projects you've completed. This showcases your track record and builds trust with potential clients.</li>
                  
                  
                    <li><strong>Acceptance Criteria:</strong> Your application will be carefully reviewed, and acceptance will be based on the completeness and accuracy of the information provided. Demonstrating professionalism, experience, and a commitment to customer satisfaction increases the likelihood of a successful application.</li>
    
                    <li><strong>Rejection Criteria:</strong> Applications may be rejected if information is incomplete, inaccurate, or if it does not align with the standards and values of HomeFix. Additionally, incomplete or inappropriate documentation may lead to rejection.</li>
                </div>
            </div>
        </div>

    </div>

@endsection