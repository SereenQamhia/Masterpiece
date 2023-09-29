<!doctype html>
<html lang="en">
  <head>
    <title>Add User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <div style="margin: 60px 300px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

      <div style="margin: 30px ">
         <h2 class="text-center">Add User</h2>
                   <form method="post" action="{{route('Users.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form">
                       @csrf
                       @method('post')

                       <div class="form-group">
                        <label for="name">User Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                          name="name">
                          <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>


                    <div class="form-group">
                        <label for="email">User email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email"></textarea>
                    </div> 

                    <div class="form-group">
                      <label for="password">User password:</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="password"></textarea>
                  </div> 
                     
                    <div class="form-group">
                        <label for="phone">User phone number:</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone"></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="address">User address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address"></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="role">User role:</label>
                        <select type="text" class="form-control" id="role" name="role" >
                          <option value="customer">Customer</option>
                          <option value="service_provider">Service_provider</option>
                    </div> 
                      
                       <div class="form-group mt-4">
                       
                           <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                           <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
                           <input type="submit" name="submit" id="submit" class="btn btn-success " style="margin: 1% 40%" value="Add User" />


                        </div>
                    
                       
                         
                       
                   </form>
               </div>
           </div>
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>