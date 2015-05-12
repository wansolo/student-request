@extends('masterlayouts.dashboardmaster')
@section('headerusername')
	 {{ Auth::user()->username }}
@stop
@section('content')
<div class="row" style="margin-bottom:100px;">
  @if (Session::has('flash_notice'))
    <div class="alert alert-info">{{Session::get('flash_notice')}}</div>
      @endif
      
    
        
      <div class="col-lg-12 col-md-12" style="margin-top:10px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <center><h4>Level {{$level}} Pending Request List</h4></center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                      <th class="bold">Student Number</th>
                  
                                      <th class="bold">Student Name</th>
                                      <th class="bold">Level</th>
                                       <th class="bold">Number Of Copies</th>
                                       <th class="bold">Type of Letter Requested</th>
                                       <th class="bold">Date</th>
                                       
                                       
                                    </thead>
                                    <tbody>
                                      
                                      @foreach($exceldetail as $underlist_item)
                                        <tr>
                                        
                                        <td >{{$underlist_item->student_number}}</td>

                                        <td >{{$underlist_item->last_name}} {{" "}} {{$underlist_item->first_name}} {{" "}} {{$underlist_item->middle_name}}  </td>
                                         <td >{{$underlist_item->level}}</td>
                                        <td >{{$underlist_item->copy}}</td>
                                        <td >{{$underlist_item->type}}</td>
                                        <td >{{$underlist_item->date}}</td>
                                      <td><a href="{{URL::to('dashboard/previewexcel/'.$underlist_item->id)}}" class="label label-primary">preview</a></td>
                                        
                                        </tr>
                                      @endforeach
                                      
                                    </tbody>
                                        
  
                                     <center>{{$exceldetail->links()}}</center>       
                                    
                                    
                                </table>

                            </div>
                           

                        </div>
    
</div>

</div>
	   

@stop











