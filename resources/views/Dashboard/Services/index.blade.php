@extends('dashlayout.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Services</h3>
                <a href="{{ route('Services.create') }}"><button type="button" class="btn custom_btn"><i
                  class="far fa-plus"></i> Add
                  Service</button></a>
              
             </div>
             <div class="vd_shadow p-0">
                <div class="vd_table table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>Service Image</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Edit/Delete</th>
                         </tr>
                      </thead>
                         <tbody>
                            @foreach ($services as $service)
                          <tr>
                           
                            <td><a href="#"><img src="{{ url('/img/' . $service->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->description}}</td>
                            
                            {{-- <td>  @if ($service->image)
                              <img src="{{ asset('images/fruits/' . $service->image) }}" alt="{{ $service->name }}" width="150" height="120">
                          @endif
                          </td> --}}
                           
                              <td>
                                 <ul class="btns_group ul_li" >
                                     <li style="display: inline-block">
                                         <a href="{{ route('Services.edit' , $service->id) }}" ><button type="submit"
                                                 class="bg_green" >
                                                 <i class="fas fa-edit"></i>
                                             </button></a>
                                   
                                         <form action="{{ route('Services.destroy',$service->id) }}"
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
                         <tr>
                            <td>
                               <div class="item_image">
                                  <img src="./img/service-1.jpg" alt="image_not_found">
                               </div>
                            </td>
                            <td>
                               <h4 class="item_title"><a href="shop-list.html"></a>Carpenter
                               </h4>
                            </td>
                            <td>
                           
                               <ul class="btns_group ul_li">
                                  <li>
                                     <button type="button" class="bg_green">
                                        <i class="fas fa-edit"></i>
                                     </button>
                                  
                                     <button type="button" class="bg_orange">
                                        <i class="fas fa-trash-alt"></i>
                                     </button>
                                  </li>
                               </ul>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="item_image">
                                  <img src="./img/service-2.jpg" alt="image_not_found">
                               </div>
                            </td>
                            <td>
                               <h4 class="item_title"><a href="shop-list.html"></a>Electrical
                               </h4>
                            </td>
                            <td>
                            
                               <ul class="btns_group ul_li">
                                  <li>
                                     <button type="button" class="bg_green">
                                        <i class="fas fa-edit"></i>
                                     </button>
                                
                                     <button type="button" class="bg_orange">
                                        <i class="fas fa-trash-alt"></i>
                                     </button>
                                  </li>
                               </ul>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="item_image">
                                  <img src="./img/service-3.jpg" alt="image_not_found">
                               </div>
                            </td>
                            <td>
                               <h4 class="item_title"><a href="shop-list.html"></a>Painting
                               </h4>
                            </td>
                       
                            <td>
                               <ul class="btns_group ul_li">
                                  <li>
                                     <button type="button" class="bg_green">
                                        <i class="fas fa-edit"></i>
                                     </button>
                                 
                                     <button type="button" class="bg_orange">
                                        <i class="fas fa-trash-alt"></i>
                                     </button>
                                  </li>
                               </ul>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="item_image">
                                  <img src="./img/service-4.jpg" alt="image_not_found">
                               </div>
                            </td>
                            <td>
                               <h4 class="item_title"><a href="shop-list.html"></a>Plumping
                               </h4>
                            </td>
                          
                            <td>
                               <ul class="btns_group ul_li">
                                  <li>
                                     <button type="button" class="bg_green">
                                        <i class="fas fa-edit"></i>
                                     </button>
                               
                                     <button type="button" class="bg_orange">
                                        <i class="fas fa-trash-alt"></i>
                                     </button>
                                  </li>
                               </ul>
                            </td>
                         </tr> 
                         
                  
                   </table>
                </div>
             </div>
          </div>
       
@endsection
   