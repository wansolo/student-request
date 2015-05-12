<!DOCTYPE html>
<html>
<head >
  
    <title>Counselling & Placement Center </title>
    
        @include('includes.jqueryandbootstrap')
</head>

<body >
<input type="hidden" id="refreshed" value="no">
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <a href="#" > <img src="{{URL::asset('img/logo.png')}}" class="img-responsive"> </a>
    
        </div>
         <div class="col-md-6">
            <ul class="nav pull-right top-nav" >
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> Welcome: @yield('headerusername')</i><b class="caret"></b></a>
                    
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="{{ URL::to('logout') }}"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>
                        </ul>
                        
                    </li>
                    
            </ul>
        </div>
        <!-- Navigation -->
        
    </div>
 

    
</div>
        <div class="container-fluid" >
            <div class="col-md-2" id="side-menu">
                <ul class="nav">
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus fa-fw"></i> View Request<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Choose Request Batch</a>

                                    <ul  class="nav nav-second-level">

                                        <li >
                                            <a style="color:#003153;" href="{{URL::to('dashboard/viewexcel/100')}}">Level 100</a>
                                        </li>
                                        <li >
                                            <a style="color:#003153;" href="{{URL::to('dashboard/viewexcel/200')}}">Level 200</a>
                                        </li>
                                        <li >
                                            <a style="color:#003153;" href="{{URL::to('dashboard/viewexcel/300')}}">Level 300</a>
                                        </li>
                                        <li >
                                            <a style="color:#003153;" href="{{URL::to('dashboard/viewexcel/400')}}">Level 400</a>
                                        </li>
                                        <li >
                                            <a style="color:#003153;" href="{{URL::to('dashboard/viewexcel/500')}}">Graduate Students</a>
                                        </li>
                                    </ul>
                                </li>
                                 <li>
                                    <a href="{{URL::to('dashboard/viewallexcel')}}">Printed Request</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('dashboard/search')}}">Search Request</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('dashboard/setsignatory')}}">Set Signatory</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus fa-fw"></i> Add To Request<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            
                                <li>
                                    <a href="{{URL::to('dashboard/addexcel')}}">Add New Request</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('dashboard/deleteexcel')}}">Delete Records From System</a>
                                </li>
                               

                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                        
                        
                    </ul>
            </div>
            <div class="col-md-10 pull-right">
                @yield('content')
            </div>
            
  
           
        </div>
          
<nav class="navbar  navbar-fixed-bottom" style="background-color:#003153;">
  <div class="container">
  <i class="navbar-brand pull-right" style="letter-spacing:3px; margin-bottom:-2px; color:#fff; font-size: 15px;">Counselling & Placement Center, UG copyright © 2015.</i>
    <hr>
  
           
  </div>

</nav>
</body>
</html>