@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Users</h3>
              <a href="{{ route('Users.create') }}"><button type="button" class="btn custom_btn"><i
                  class="far fa-plus"></i> Add
                 User</button></a>
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>User Image</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>User Address</th>
                            <th>User Role</th>
                            <th>Delete</th>
                         </tr>
                      </thead>
                         <tbody>
                            @foreach ($Users as $User)
                          <tr>
                           
                            <td><a href="#"><img src="{{ url('img/' . $User->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$User->name}}</td>
                            <td>{{$User->email}}</td>
                            <td>{{$User->phone_number}}</td>
                            <td>{{$User->address}}</td>
                            <td>{{$User->user_type}}</td>
                            
                            {{-- <td>  @if ($User->image)
                              <img src="{{ asset('images/fruits/' . $User->image) }}" alt="{{ $User->name }}" width="150" height="120">
                          @endif
                          </td> --}}
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         {{-- <a href="{{ route('Users.edit' , $User->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit"></i>
                                             </button></a> --}}
                                   
                                         <form action="{{ route('Users.destroy',$User->id) }}"
                                             method="POST" style="display: inline-block">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="bg_orange" >
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
   