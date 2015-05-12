
        @if(count($searchStudents) > 0)
					<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                      <th class="bold">Student Number</th>
                  
                                      <th class="bold">Student Name</th>
                                       <th class="bold">Number Of Copies</th>
                                       <th class="bold">Type of Letter Requested</th>
                                       <th class="bold">Date</th>
                                       
                                    </thead>
                                    <tbody>
                                      
                                      @foreach($searchStudents as $underlist_item)
                                        <tr>
                                        
                                        <td >{{$underlist_item->student_number}}</td>
                                        <td >{{$underlist_item->last_name}} {{" "}} {{$underlist_item->first_name}} {{" "}} {{$underlist_item->middle_name}}  </td>
                                        <td >{{$underlist_item->copy}}</td>
                                        <td >{{$underlist_item->type}}</td>
                                        <td >{{$underlist_item->date}}</td>
                                      <td><a href="{{URL::to('dashboard/previewexcel/'.$underlist_item->student_number)}}" class="label label-primary">preview</a></td>
                                      
                                        </tr>
                                      @endforeach
                                      
                                    </tbody>
                                        
  
                                    
                                </table>
        
        @else
          <center>
          <div class="btn btn-warning">
        
            <h3 style="color:red;">No Match Found!! Check Student Number and Try Again..</h3>
              
          </div>
              </center>
        @endif