@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Courses</h3>
                <a href="{{ route('Courses.create') }}"><button type="button" class="btn custom_btn"><i
                  class="far fa-plus"></i> Add
                  Course</button></a>
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>Course Image</th>
                            <th>Course Title</th>
                            <th>Course Description</th>
                            <th>Course Time</th>
                            <th>Course Day</th>
                            <th>Course Location</th>
                            <th>Course Price</th>
                            <th>Edit/Delete</th>
                         </tr>
                      </thead>
                         <tbody>
                            @foreach ($Courses as $Course)
                          <tr>
                           
                            <td><a href="#"><img src="{{ url('img/' . $Course->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$Course->title}}</td>
                            <td>{{$Course->description}}</td>
                            <td>{{$Course->time}}</td>
                            <td>{{$Course->day}}</td>
                            <td>{{$Course->location}}</td>
                            <td>{{$Course->price}}</td>
                            
                            {{-- <td>  @if ($Course->image)
                              <img src="{{ asset('images/fruits/' . $Course->image) }}" alt="{{ $Course->name }}" width="150" height="120">
                          @endif
                          </td> --}}
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         <a href="{{ route('Courses.edit' , $Course->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit" style="color: rgb(238, 224, 224)"></i>
                                             </button></a>
                                   
                                         <form action="{{ route('Courses.destroy',$Course->id) }}"
                                             method="POST" style="display: inline-block">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="bg_orange show_confirm" >
                                                 <i class="fas fa-trash-alt" style="color: rgb(238, 224, 224)"></i>
                                             </button>
                                         </form>
                                     </li>
                                 </ul>
                             </td>
                        
                          </tr>
                          @endforeach
                        </tbody>
                        
                         
                  
                   </table>
                </div>
             </div>
          </div>
       
@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
   $(document).ready(function () {


       // Handle delete confirmation (if needed)
       $('.show_confirm').on('click', function (e) {
           e.preventDefault();
           var form = $(this).closest("form");

           swal({
               title: "Are you sure you want to delete this record?",
               text: "If you delete this, it will be gone forever.",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           }).then(function (willDelete) {
               if (willDelete) {
                   form.submit();
               }
           });
       });
   });
</script>
   