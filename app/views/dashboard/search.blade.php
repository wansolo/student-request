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
      
      <div class="col-md-12">
                    <div class="panel panel-default" style="margin-top:10px;">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                           <center><h4>Search Student Data</h4></center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="form-group" style="padding: 10px;">
                           <input type="text" id="search-input" class="form-control" placeholder="Search" onkeydown="down()" onkeyup="up()" >
                            </div>
                            <div class="col-lg-12" id="search-results">

                            </div>
                   
                        </div>
    

    
  </div>
     
@stop











