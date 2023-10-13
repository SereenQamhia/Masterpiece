<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div style="margin: 150px 300px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

    <div style="margin: 30px ">
    <h2 class="text-center">Update {{ $data['name']}} Provider</h2>

    <form action="{{ route('Providers.update', $data['id']) }}" method="POST" class="needs-validation" enctype="multipart/form-data">
       
        <div class="form-group">
            <label for="name">Provider Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name"
                value="{{ $data['name'] }}" name="name">

        </div>

        <div class="form-group">
            <label for="Description">Provider Description:</label>
            <textarea type="text" class="form-control" id="description" name="description">{{ $data['description'] }}</textarea>

        </div>
     
     

        <div class="form-group">
            <label for="Image"> Provider Image:</label>
            <input type="file" class="form-control" id="Image" name="image">
        </div>

        <div>
            @if ($data->image)
                <img src="{{ asset('img/' . $data->image) }}" alt="{{ $data->name }}" width="200"
                    height="200">
            @endif
        </div>

        <button type="submit" class="btn btn-success " style="margin: 1% 40%">Save update</button>
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