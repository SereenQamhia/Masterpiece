<!doctype html>
<html lang="en">
  <head>
    <title>Add Professional</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <div style="margin: 150px 300px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

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
        
            <div class="form-group">
                <label for="description">Professional Description:</label>
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
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
        
            <div class="form-group">
                <label for="profission">Profession:</label>
                <input type="text" class="form-control" id="profission" name="profission" placeholder="Profession">
            </div>
        
            <div class="form-group">
                <label for="hoursofwork">Hours of Work:</label>
                <input type="text" class="form-control" id="hoursofwork" name="hoursofwork" placeholder="Hours of Work">
            </div>
        
            <div class="form-group">
                <label for="daysofwork">Days of Work:</label>
                <input type="text" class="form-control" id="daysofwork" name="daysofwork" placeholder="Days of Work">
            </div>
        
            <div class="form-group">
                <label for="completed_jobs">Completed Jobs:</label>
                <input type="text" class="form-control" id="completed_jobs" name="completed_jobs" placeholder="Completed Jobs">
            </div>
        
            <div class="form-group">
                <label for="provider_id">Provider ID:</label>
                <input type="text" class="form-control" id="provider_id" name="provider_id" placeholder="Provider ID">
            </div>
        
            <div class="form-group mt-4">
                <label for="image">Image:</label>
                <input name="image" type="file" class="form-control white-input" id="image">
                <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
            </div>

            
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

    <input type="submit" name="submit" id="submit" class="form-submit" value="Add" style="color:black;">
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