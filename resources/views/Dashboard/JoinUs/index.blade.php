@extends('Dashboard.master')



@section('content')
    

      
          <div class="trending_products">
             <div class="vd_title_wrap">
                <h3>Joining requists</h3>
               
              
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
                            <th>Profission</th>
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
                            <th>Actions</th>
                         </tr>
                      </thead>
                         <tbody >
                            @foreach ($JoinRequests as $JoinReq)
                          <tr>
                            <td><a href="#"><img src="{{ url('/img/' . $JoinReq->image) }}" width="100px"
                              height="100px" alt="image"></a></td>
                            <td>{{$JoinReq->name}}</td>
                            <td>{{$JoinReq->description}}</td>
                            <td>{{$JoinReq->email}}</td>
                            <td><a href="{{ url('cv/' . $JoinReq->cv) }}">Show file</a></td>
                            <td>{{$JoinReq->location}}</td>
                            <td>{{$JoinReq->experience}}</td>
                            <td>{{$JoinReq->age}}</td>
                            <td>{{$JoinReq->gender}}</td>
                            <td>{{$JoinReq->price}}</td>
                            <td>{{$JoinReq->profission}}</td>
                            <td>{{$JoinReq->completed_jobs}}</td>
                            <td>{{$JoinReq->daysofwork}}</td>
                            <td>{{$JoinReq->hoursofwork}}</td>
                            <td>{{$JoinReq->provider->name}}</td>
                            <td><img src="{{ url('/img/' . $JoinReq->image1) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $JoinReq->image2) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $JoinReq->image3) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $JoinReq->image4) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $JoinReq->image5) }}" width="100px"
                                height="100px" alt="image"></td>
                            <td><img src="{{ url('/img/' . $JoinReq->image6) }}" width="100px"
                                height="100px" alt="image"></td>
                          
                         
                         
                           
                              <td>
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li style="display: inline-block; margin-right: 10px;">
                                        <form action="{{ route('accept.joinRequest', $JoinReq->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="bg_green" style="color: white; border: 1px solid; padding: 10px; min-width: 80px; border-radius: 5px;">
                                                Accept
                                            </button>
                                        </form>
                                    </li>
                                
                                    <li style="display: inline-block;">
                                        <form action="{{ route('JoinUs.destroy', $JoinReq->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg_orange" style="color: white; border: 1px solid; padding: 10px; min-width: 80px; border-radius: 5px;">
                                                Reject
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
   