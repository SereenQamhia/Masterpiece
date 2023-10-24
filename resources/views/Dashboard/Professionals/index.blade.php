@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Professionals</h3>
                <a href="{{ route('Professionals.create') }}"><button type="button" class="btn custom_btn"><i
                  class="far fa-plus"></i> Add
                  Professional</button></a>
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>

                         <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Email</th>
                            <th>CV</th>
                            <th>Location</th>
                            <th>Years of experience</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Price</th>
                            <th>Profession</th>
                            <th>Completed_jobs</th>
                            <th>Days of work</th>
                            <th>Hours of work</th>
                            <th>Related Provider</th>
                            <th>Project image1</th>
                            <th>Project image2</th>
                            <th>Project image3</th>
                            <th>Project image4</th>
                            <th>Project image5</th>
                            <th>Project image6</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                         <tbody style="text-align:center" >
                            @foreach ($Professionals as $Professional)
                          <tr>
                            <td><a href="#"><img src="{{ url('/img/' . $Professional->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$Professional->name}}</td>
                            <td>
                                <span class="truncated-description">
                                    {{ $Professional->truncated_description }}
                                </span>
                                <span class="full-description" style="display: none;">
                                    {{ $Professional->showmore_description }}
                                </span>
                                <a href="#" class="read-more">Read More</a>
                            </td>
                            <td>{{$Professional->email}}</td>
                            <td><a style="color: rgb(1, 90, 255);" href="{{ url('cv/' . $Professional->cv) }}">Show file</a></td>
                            <td>{{$Professional->location}}</td>
                            <td>{{$Professional->experience}}</td>
                            <td>{{$Professional->age}}</td>
                            <td>{{$Professional->gender}}</td>
                            <td>{{$Professional->price}}</td>
                            <td>{{$Professional->profission}}</td>
                            <td>{{$Professional->completed_jobs}}</td>
                            <td>{{$Professional->daysofwork}}</td>
                            <td>{{$Professional->hoursofwork}}</td>
                            <td>{{$Professional->provider_id}}</td>
                            <td><img src="{{ url('/img/' . $Professional->image1) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $Professional->image2) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $Professional->image3) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $Professional->image4) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $Professional->image5) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $Professional->image6) }}" width="100px"
                                height="100px" alt="image"></td>
                          
                         
                         
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         {{-- <a href="{{ route('Professionals.edit' , $Professional->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit" style="color: rgb(238, 224, 224)"></i>
                                             </button></a> --}}
                                   
                                         <form action="{{ route('Professionals.destroy',$Professional->id) }}"
                                             method="POST" style="display: inline-block">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="bg_orange show_confirm">
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
        // Handle "Read More" click
        $('.read-more').on('click', function (e) {
            e.preventDefault();
            $(this).prev('.truncated-description').hide();
            $(this).prev('.full-description').show();
        });

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