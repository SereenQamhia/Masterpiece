@extends('Dashboard.master')



@section('content')
      
   <div style="margin:  20px 15px; border: solid rgb(93, 187, 0) 3px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">

    <div style="margin: 30px ">
    <h2 class="text-center">Update {{ $data['name']}} Course</h2>

    <form action="{{ route('Courses.update', $data['id']) }}" method="POST" class="needs-validation" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Course Title: <Title></Title>:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title"
              name="title"  value="{{ $data['title'] }}" >
        </div>

        <div class="form-group">
            <label for="time">Course Time:</label>
            <input type="text" class="form-control" id="time" name="time" placeholder="time"  value="{{ $data['time'] }}">

        </div> 
        
        <div class="form-group">
            <label for="location">Course location:</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $data['location'] }}">
        </div>
     
        <div class="form-group">
            <label for="day">Course day:</label>
            <input type="text" class="form-control" id="day" name="day" value="{{ $data['day'] }}">
        </div>

        <div class="form-group">
            <label for="price">Course price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $data['price'] }}">
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