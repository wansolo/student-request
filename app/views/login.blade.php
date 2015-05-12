@extends('masterlayouts.master')
@section('content')
	 <div class="row">
   <a href="{{URL::to('register')}}" class="label label-success pull-right active" style="margin-right:10px;">Register <span class="badge">?</span></a>

        <div class="col-md-4 col-md-offset-4"  id="logform">
      <center><h3 style="font-wieght:bold; text-decoration:underline;" >Authorization Required</h3></center>
      @if (Session::has('flash_notice'))
    <div class="alert alert-info">{{Session::get('flash_notice')}}</div>
      @endif
      @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
      @endif
        
   

    {{Form::open(array('url' => 'login', 'method' => 'Post'))}}
      <div class="form-group {{$errors->has('firstname')?'has-error':''}}">
        {{form::label('username', 'Username')}}
        {{form::text('username', Input::old('firstname'), array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('firstname')}}</span>
      </div>
      <div class="form-group {{$errors->has('password')?'has-error':''}}">
        {{form::label('password', 'Password')}}
        {{form::password('password', array('class'=>'form-control'))}}
        <span class="help-block">{{$errors->first('password')}}</span>
      </div>

     <div class="form-group" style="margin-bottom:80px;">
       {{Form::submit('Login', array('class' => 'btn btn-primary btn-md pull-right'))}}
   
     </div>
    
    {{Form::close()}}
      </div>
   </div>
	 
@stop