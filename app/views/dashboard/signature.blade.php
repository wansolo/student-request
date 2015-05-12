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
                           <center><h4>Set Signatory Name</h4></center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                {{Form::open(array('url' => 'dashboard/signatory', 'method' => 'Post'))}}
                      <div class="form-group {{$errors->has('name')?'has-error':''}}">
                        {{form::label('name', 'Name of Signatory')}}
                        {{form::text('name', Input::old('name'), array('class'=> 'form-control'))}}
                        <span class="help-block">{{$errors->first('name')}}</span>
                      </div>
                      
                     <div class="form-group" style="margin-bottom:80px;">
                       {{Form::submit('set signatory', array('class' => 'btn btn-primary btn-md pull-right'))}}
                   
                     </div>
                    
                    {{Form::close()}}
                        </div>
    

    
  </div>
     
@stop











