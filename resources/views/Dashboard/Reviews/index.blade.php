@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Reviews</h3>
           
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                          
                             <th>Review Text</th>
                             <th>Rating</th>
                             <th>User</th>
                             <th>Professional</th>
                            <th>Delete</th>
                         </tr>
                      </thead>
                         <tbody>
                            @foreach ($Reviews as $Review)
                          <tr>
                           
                          
                            <td>{{$Review->review_text}}</td>
                            <td>{{$Review->rating}}</td>
                            <td>{{$Review->user->name }}</td>
                            <td>{{$Review->professional->name}}</td>
                       
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                      
                                   
                                         <form action="{{ route('Reviews.destroy',$Review->id) }}"
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