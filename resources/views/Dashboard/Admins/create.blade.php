@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

      <div style="margin: 30px ">
         <h2 class="text-center">Add Admin</h2>
                   <form method="post" action="{{route('Admins.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form">
                       @csrf
                       @method('post')

                       <div class="form-group">
                        <label for="name">Admin Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                          name="name">
                          <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>


                    <div class="form-group">
                        <label for="email">Admin email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email"></textarea>
                    </div> 

                    <div class="form-group">
                      <label for="password">Admin password:</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="password"></textarea>
                  </div> 
                     
             
                      
                       <div class="form-group mt-4">
                       
                           <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                           <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
                           <input type="submit" name="submit" id="submit" class="btn btn-success " style="margin: 1% 40%" value="Add Admin" />


                        </div>
                    
                       
                         
                       
                   </form>
               </div>
           </div>
 

           @endsection