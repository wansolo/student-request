
<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('includes.jqueryandbootstrap')
	<style type="text/css">
	body{
		background-color: white;
		font-family: "Times New Roman";
		font-size: 12pt;
	}
	h4{
		padding: 1px auto;
		font-family: "Times New Roman";
		text-decoration: underline;
		font-weight: bold;
		font-size: 13pt;

	}
	p{
		line-height: 150%;

	}
	</style>
</head>
<body>
	<div class="container-fluid" style="margin-top:200px;">
	<div class="row" style="margin-bottom: 30px;">
		<div class="col-md-3 col-md-offset-3">
			<span style="margin-left:60px;">
				{{date("F j,  Y ")}}.
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<span style="margin-left:60px;">Dear Sir/Madam,</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">

			<center><h4>REQUEST FOR ATTACHMENT</h4></center>
			<center><h4>{{$generateexceldetail->last_name}} ,{{"    "}} {{$generateexceldetail->first_name}} {{" "}} {{$generateexceldetail->middle_name}} </h4></center>
			<center><h4>{{$generateexceldetail->program}} ( 
					
					
					<?php echo strtoupper($generateexceldetail->course5); ?>
						
					)
			</h4></center>
			<center><h4>LEVEL {{$generateexceldetail->level}}</h4></center>

		</div>

		
		
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<p style="margin-left:60px;">
				This is to certify that the above named is  
				a graduate 
				 student of this University,<br> reading for the 
				 <?php if ($generateexceldetail->program == "MSc.") {
				 	echo " Master of Science Degree.";
				 }
					else{
						echo " Master of Philosophy Degree.";
					}
				  ?>
				 	
					<br>
					<br>
				 @if($generateexceldetail->gender == "MALE")
					He
				@else
					She
				@endif 
				is looking for practical internship. As the University encourages students <br>to get employment experience,
				 I should be very grateful if you could offer
				@if($generateexceldetail->gender == "MALE")
					him
				@else
					her
				@endif 
				the <br>oppotunity to be attached to your organization during the vacation period.<br><br>
				Please contact @if($generateexceldetail->gender == "MALE")
					him
				@else
					her 
				@endif on <b>{{$generateexceldetail->phone}}</b> or <b> {{$generateexceldetail->email}}</b><br>
				Thank you.<br><br>

			</p>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<span  style="margin-left:60px;">Yours faithfully,</span><br><br><br>
			<span  style="margin-left:60px;">{{$signature->name}} </span><br><br>
			<span  style="margin-left:60px;">For: Director.</span>
		</div>
	</div>
	<div class="row">
	<div class="col-md-3 col-md-offset-8 pull-right">
		<a id="editpagebutton" href="{{URL::to('dashboard/editexcel/'.$generateexceldetail->id)}}" class="btn btn-warning">edit info</a>
		
		<button onclick="myFunction()" id="printpagebutton" class="btn btn-primary">Print Letter</button>
		<a href="{{URL::to('dashboard/viewexcel/500')}}" id="homepagebutton" class="btn btn-success">Go Home</a>
	</div>
	
</div>
</div>
<script type="text/javascript">
	
	function myFunction() {
    
        var printButton = document.getElementById("printpagebutton");
        var homeButton = document.getElementById("homepagebutton");
        var editButton = document.getElementById("editpagebutton");
        
        printButton.style.visibility = 'hidden';
        homeButton.style.visibility = 'hidden';
        editButton.style.visibility = 'hidden';
        window.print()
       
        printButton.style.visibility = 'visible';
        homeButton.style.visibility = 'visible';
        editButton.style.visibility = 'visible';
}
</script>



</body>
</html>
