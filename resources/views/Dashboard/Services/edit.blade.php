@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

    <div style="margin: 30px ">
    <h2 class="text-center">Update {{ $data['name']}} Service</h2>

    <form action="{{ route('Services.update', $data['name']) }}" method="POST" class="needs-validation" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Service Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name"
                value="{{ $data['name'] }}" name="name">

        </div>

        <div class="form-group">
            <label for="Description">Service Description:</label>
            <textarea type="text" class="form-control" id="description" name="description">{{ $data['description'] }}</textarea>

        </div>
     
        <div class="form-group">
          <label for="image"> Course Image:</label>
          <input type="file" class="form-control" id="image" name="image">
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