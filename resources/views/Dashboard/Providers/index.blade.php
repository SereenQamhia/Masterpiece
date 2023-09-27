@extends('dashlayout.master')



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
                            <th>Edit/Delete</th>
                         </tr>
                      </thead>
                         <tbody>
                            @foreach ($Providers as $Provider)
                          <tr>
                           
                            <td><a href="#"><img src="{{ url('/img/' . $Provider->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$Provider->name}}</td>
                            <td>{{$Provider->description}}</td>
                            
                            {{-- <td>  @if ($Provider->image)
                              <img src="{{ asset('images/fruits/' . $Provider->image) }}" alt="{{ $Provider->name }}" width="150" height="120">
                          @endif
                          </td> --}}
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         <a href="{{ route('Providers.edit' , $Provider->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit"></i>
                                             </button></a>
                                   
                                         <form action="{{ route('Providers.destroy',$Provider->id) }}"
                                             method="POST" style="display: inline-block">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="bg_orange">
                                                 <i class="fas fa-trash-alt"></i>
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
   