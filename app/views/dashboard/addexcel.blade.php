@extends('masterlayouts.dashboardmaster')
@section('headerusername')
   {{ Auth::user()->username }}
@stop
@section('content')
  <div class="row">
  @if (Session::has('flash_notice'))
    <div class="alert alert-info">{{Session::get('flash_notice')}}</div>
      @endif

      @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
      @endif
      
      <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default" style="margin-top:10px;">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                           <center><h4>Load New Excel Data</h4></center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
   

    {{Form::open(array('url' => 'dashboard/addtoexcel', 'method' => 'post', 'files' => true,))}}
     
      
      
      <div class="form-group {{$errors->has('file_name')?'has-error':''}}">
        {{form::label('file_name', 'Upload Excel File')}}
        {{form::file('file_name', '' , array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('file_name')}}</span>
      </div>
      
      
    {{Form::submit('Load Data', array('class' => 'btn btn-primary pull-right'))}}
    {{Form::close()}}
                            <!-- /.table-responsive -->
                        </div>
    

    
  </div>
     
@stop











