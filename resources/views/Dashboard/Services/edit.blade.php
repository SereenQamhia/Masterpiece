@extends('dashlayout.master')


@section('content')


<div class="trending_products">
    <div class="vd_title_wrap">
    <h2>Form updata product</h2>

    <form action="{{ route('Services.update', $data['id']) }}" method="POST" class="needs-validation">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name"
                value="{{ $data['name'] }}" name="name">

        </div>

        <div class="form-group">
            <label for="Description">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description">{{ $data['description'] }}</textarea>

        </div>
     
     

        <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" class="form-control" id="Image" name="image">
        </div>

        <div>
            @if ($data->image)
                <img src="{{ asset('images/products/' . $data->image) }}" alt="{{ $data->name }}" width="200"
                    height="200">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Save updata</button>
    </form>

    </div>
    </div>


@endsection