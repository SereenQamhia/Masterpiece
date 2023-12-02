@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Providers</h3>
                <a href="{{ route('Providers.create') }}"><button type="button" class="btn custom_btn"><i
                  class="far fa-plus"></i> Add
                  Provider</button></a>
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>Provider Image</th>
                            <th>Provider Name</th>
                            <th>Provider Description</th>
                            <th>Related Service</th>
                            <th>Edit/Delete</th>
                         </tr>
                      </thead>
                         <tbody >
                            @foreach ($Providers as $Provider)
                          <tr>
                           
                            <td><a href="#"><img src="{{ url('/img/' . $Provider->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$Provider->name}}</td>
                            <td>{{$Provider->description}}</td>
                            <td>{{$Provider->service_name}}</td>
                            
                            {{-- <td>  @if ($Provider->image)
                              <img src="{{ asset('images/fruits/' . $Provider->image) }}" alt="{{ $Provider->name }}" width="150" height="120">
                          @endif
                          </td> --}}
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         <a href="{{ route('Providers.edit' , $Provider->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit" style="color: rgb(238, 224, 224)"></i>
                                             </button></a>
                                   
                                         <form action="{{ route('Providers.destroy',$Provider->id) }}"
                                             method="POST" style="display: inline-block">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="bg_orange show_confirm" data-confirm-delete="true" >
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