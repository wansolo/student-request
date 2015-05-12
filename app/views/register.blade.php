@extends('masterlayouts.master')
@section('content')
   <div class="row">
   <a href="{{URL::to('login')}}" class="label label-success pull-right active" style="margin-right:10px;">Login <span class="badge">?</span></a>

        <div class="col-md-4 col-md-offset-4"  id="regform">
      <center><h3 style="font-wieght:bold; text-decoration:underline;">Register User Account</h3></center>
      @if (Session::has('flash_notice'))
    <div class="alert alert-info">{{Session::get('flash_notice')}}</div>
      @endif
      @if (Session::has('error'))
    <div class="alert alert-info">{{Session::get('error')}}</div>
      @endif
        
   
  {{Form::open(array('url' => 'register', 'method' => 'Post'))}}
      <div class="form-group {{$errors->has('firstname')?'has-error':''}}">
        {{form::label('firstname', 'First Name')}}
        {{form::text('firstname', Input::old('firstname'), array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('firstname')}}</span>
      </div>
      <div class="form-group {{$errors->has('lastname')?'has-error':''}}">
        {{form::label('lastname', 'Last Name')}}
        {{form::text('lastname', Input::old('lastname'), array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('lastname')}}</span>
      </div>  
      <div class="form-group {{$errors->has('username')?'has-error':''}}">
        {{form::label('username', 'Username')}}
        {{form::text('username', Input::old('username'), array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('username')}}</span>
      </div>
      <div class="form-group {{$errors->has('password')?'has-error':''}}">
        {{form::label('password', 'Password')}}
        {{form::password('password', array('class'=>'form-control'))}}
        <span class="help-block">{{$errors->first('password')}}</span>
      </div>
      <div class="form-group {{$errors->has('repeatpassword')?'has-error':''}}">
        {{form::label('password', 'Repeat Password')}}
        {{form::password('repeatpassword',  array('class'=>'form-control'))}}
        <span class="help-block">{{$errors->first('repeatpassword')}}</span>
      </div>
     
      <div>
        {{form::label('gender', 'Gender: ')}}
        {{form::label('gender', 'Male')}}
        {{form::radio('gender', 'Male', true)}}
        {{form::label('gender', 'Female')}}
        {{form::radio('gender', 'Female')}}
      </div>
       
     <div class="form-group {{$errors->has('email')?'has-error':''}}">
        {{form::label('email', 'Email Address')}}
        {{form::email('email', Input::old('email'), array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('email')}}</span>
      </div>

     <div class="form-group" style="margin-bottom:80px;">
       {{Form::submit('Register', array('class' => 'btn btn-primary btn-md pull-right'))}}
   
     </div>
    
    {{Form::close()}}
      </div>
   </div>
   
@stop