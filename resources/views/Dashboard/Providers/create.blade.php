@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

      <div style="margin: 30px ">
         <h2 class="text-center">Add Provider</h2>
                   <form method="post" action="{{route('Providers.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form">
                       @csrf
                       @method('post')

                       <div class="form-group">
                        <label for="name">Provider Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                          name="name">
                          <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>


                    <div class="form-group">
                        <label for="Description">Provider Description:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="discription"></textarea>
            
                    </div> 
                    
                  
                        
                   
                    <div class="form-group">
                        <label for="Service">Service:</label>
                        {{-- <input type="text" class="form-control" id="Service" name="Service" placeholder="Service"></textarea> --}}
                         <select class="form-control" id="Service" name="Service" placeholder="Service">
                          @foreach ($Services as $service)
                            <option value="{{$service->name}}">{{$service->name}}</option>
                            @endforeach
                         </select>
                    </div> 
                   
                      
                       <div class="form-group mt-4">
                       
                           <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                           <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
                           <input type="submit" name="submit" id="submit" class="form-submit" value="Add" style="color:black;"/>

                        </div>
                    
                       
                         
                       
                   </form>
               </div>
           </div>
 
           @endsection