@extends('masterlayouts.dashboardmaster')
@section('headerusername')
   {{ Auth::user()->username }}
@stop
@section('content')
<div class="row">
    @if (Session::has('flash_notice'))
        <div class="alert alert-info">{{Session::get('flash_notice')}}</div>
      @endif
      

         <div class="col-md-12" style="margin-bottom: 100px;">

                    <div class="panel panel-primary" style="margin-top:10px;">
                    <div class="panel-heading">
                           <center>Edit Student Record</center>
                        </div>
        <div class="col-md-6 col-md-offset-3 panel-body">

            {{Form::open(array('url' => 'dashboard/updateexcel', 'method' => 'post'))}}
             {{form::hidden('excel_id', $detail->id, array('class'=> 'form-control'))}}
             {{form::hidden('id', $detail->student_number, array('class'=> 'form-control'))}}
             <div class="form-group {{$errors->has('type')?'has-error':''}}">
        {{form::label('type', 'type')}}
        {{form::text('type',$detail->type, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('type')}}</span>
  type
      <div class="form-group {{$errors->has('first_name')?'has-error':''}}">
        {{form::label('first_name', 'First Name')}}
        {{form::text('first_name',$detail->first_name, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('first_name')}}</span>
      </div>
      <div class="form-group {{$errors->has('last_name')?'has-error':''}}">
        {{form::label('last_name', 'Last Name')}}
        {{form::text('last_name', $detail->last_name, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('last_name')}}</span>
      </div>  
      <div class="form-group {{$errors->has('middle_name')?'has-error':''}}">
        {{form::label('middle_name', 'Middle Name')}}
        {{form::text('middle_name', $detail->middle_name, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('middle_name')}}</span>
      </div>
       <div class="form-group {{$errors->has('level')?'has-error':''}}">
        {{form::label('level', 'Level')}}
        {{form::text('level', $detail->level, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('level')}}</span>
      </div>
     <div class="form-group {{$errors->has('middle_name')?'has-error':''}}">
        {{form::label('phone', 'Phone Number')}}
        {{form::text('phone', $detail->phone, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('phone')}}</span>
      </div>
      <div class="form-group {{$errors->has('combination_type')?'has-error':''}}">
        {{form::label('program', 'program')}}
        {{form::text('program', $detail->program, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('program')}}</span>
      </div>
       <div class="form-group {{$errors->has('combination_type')?'has-error':''}}">
        {{form::label('combination_type', 'Combination Type')}}
        {{form::text('combination_type', $detail->combination_type, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('combination_type')}}</span>
      </div>
      <div class="form-group {{$errors->has('first_major')?'has-error':''}}">
        {{form::label('first_major', 'First Major')}}
        {{form::text('first_major', $detail->first_major, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('first_major')}}</span>
      </div>
      <div class="form-group {{$errors->has('second_major')?'has-error':''}}">
        {{form::label('second_major', 'Second Major')}}
        {{form::text('second_major', $detail->second_major, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('second_major')}}</span>
      </div>

      <div class="form-group {{$errors->has('course1')?'has-error':''}}">
        {{form::label('course1', 'First Course for B.A. level 100')}}
        {{form::text('course1', $detail->course1, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('course1')}}</span>
      </div>
      <div class="form-group {{$errors->has('course2')?'has-error':''}}">
        {{form::label('course2', 'Second Course for B.A. level 100')}}
        {{form::text('course2', $detail->course2, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('course2')}}</span>
      </div>
      <div class="form-group {{$errors->has('course3')?'has-error':''}}">
        {{form::label('course3', 'Third Course for B.A. level 100')}}
        {{form::text('course3', $detail->course3, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('course3')}}</span>
      </div>
       <div class="form-group {{$errors->has('course4')?'has-error':''}}">
        {{form::label('course4', 'BSc. level 100 Programme Name')}}
        {{form::text('course4', $detail->course4, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('course4')}}</span>
      </div>
       
     <div class="form-group {{$errors->has('email')?'has-error':''}}">
        {{form::label('email', 'Email Address')}}
        {{form::email('email', $detail->email, array('class'=> 'form-control'))}}
        <span class="help-block">{{$errors->first('email')}}</span>
      </div>

     <div class="form-group" style="margin-bottom:80px;">
       {{Form::submit('update', array('class' => 'btn btn-primary btn-md pull-right'))}}
   
     </div>
    
    {{Form::close()}}       
          
    </div>
    </div>
    </div>
    

@stop











