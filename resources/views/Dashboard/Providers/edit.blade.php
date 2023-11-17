@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

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
    @endsection