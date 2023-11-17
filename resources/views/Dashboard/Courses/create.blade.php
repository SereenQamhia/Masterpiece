@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

      <div style="margin: 30px ">
         <h2 class="text-center">Add Course</h2>
                   <form method="post" action="{{route('Courses.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form">
                       @csrf
                       @method('post')

                       <div class="form-group">
                        <label for="title">Course Title: <Title></Title>:</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title"
                          name="title">
                          <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>


                    <div class="form-group">
                        <label for="time">Course Time:</label>
                        <input type="text" class="form-control" id="time" name="time" placeholder="time"></textarea>
            
                    </div> 


                    <div class="form-group">
                        <label for="location">Course location:</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="location"></textarea>
            
                    </div> 


                    <div class="form-group">
                        <label for="day">Course day:</label>
                        <input type="text" class="form-control" id="day" name="day" placeholder="day"></textarea>
            
                    </div> 

                    <div class="form-group">
                        <label for="price">Course price:</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="location"></textarea>
            
                    </div> 


               
                     
                      
                       <div class="form-group mt-4">
                       
                           <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                           <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
                           <input type="submit" name="submit" id="submit" class="btn btn-success " style="margin: 1% 40%" value="Add Course" />


                        </div>
                    
                       
                         
                       
                   </form>
               </div>
           </div>
 


           @endsection