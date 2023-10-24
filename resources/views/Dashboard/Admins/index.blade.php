@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Admins</h3>
              <a href="{{ route('Admins.create') }}"><button type="button" class="btn custom_btn"><i
                  class="far fa-plus"></i> Add
                 Admin</button></a>
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>Admin Image</th>
                            <th>Admin Name</th>
                            <th>Admin Email</th>
                            <th>Delete</th>
                         </tr>
                      </thead>
                         <tbody>
                            @foreach ($Admins as $Admin)
                          <tr>
                           
                            <td><a href="#"><img src="{{ url('img/' . $Admin->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$Admin->name}}</td>
                            <td>{{$Admin->email}}</td>
                            {{-- <td>  @if ($Admin->image)
                              <img src="{{ asset('images/fruits/' . $Admin->image) }}" alt="{{ $Admin->name }}" width="150" height="120">
                          @endif
                          </td> --}}
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         {{-- <a href="{{ route('Admins.edit' , $Admin->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit"></i>
                                             </button></a> --}}
                                   
                                         <form action="{{ route('Admins.destroy',$Admin->id) }}"
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
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        var deleteButtons = document.querySelectorAll('.show_confirm');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                var form = button.closest("form");

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
    });
</script>

   