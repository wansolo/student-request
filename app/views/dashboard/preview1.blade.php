
<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('includes.jqueryandbootstrap')
	<style type="text/css">
	body{
		background-color: white;
		font-family: "Times New Roman";
		font-size: 13pt;
	}
	h4{
		padding: 1px auto;
		font-family: "Times New Roman";
		text-decoration: underline;
		font-weight: bold;
		
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

			<center><h4>REQUEST FOR NATIONAL SERVICE</h4></center>
			<center><h4>{{$generateexceldetail->last_name}} {{" "}} {{$generateexceldetail->first_name}} {{" "}} {{$generateexceldetail->middle_name}} </h4></center>
			<center><h4>{{$generateexceldetail->program}} ( 
					@if($generateexceldetail->combination_type == 'SINGLE MAJOR')
					<?php echo strtoupper($generateexceldetail->first_major); ?>
						
					@elseif($generateexceldetail->combination_type == 'MAJOR-MINOR')

						<?php echo strtoupper($generateexceldetail->first_major); ?>{{" "}} WITH {{" "}} <?php echo strtoupper($generateexceldetail->second_major); ?>
					@else
								<?php echo strtoupper($generateexceldetail->first_major); ?>{{" "}} AND {{" "}} <?php echo strtoupper($generateexceldetail->second_major); ?>
					@endif 
					)

			</h4></center>
			<center><h4>{{$generateexceldetail->nss}}</h4></center>
			
		</div>

		
		
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<p style="margin-left:60px;">
				The above named is a final year student of this University, studying for the 
				@if($generateexceldetail->program == 'BSc.')
						Bachelor of Science degree
					@elseif($generateexceldetail->program== 'B.F.A')
						Bachelor of Fine Arts degree
					@elseif($generateexceldetail->program== 'B.A.')
						Bachelor of Arts degree
					@elseif($generateexceldetail->program== 'BPharm.')
						Bachelor of Pharmacy degree
					@elseif($generateexceldetail->program== 'LLB')
						Bachelor of Laws degree
					@elseif($generateexceldetail->program== 'MBCHB')
						Bachelor of Medicine degree
					@elseif($generateexceldetail->program== 'M.A.')
						Master of Arts degree
					@elseif($generateexceldetail->program== 'MSc.')
						Master of Science degree
					@elseif($generateexceldetail->program== 'MPhil.')
						Master of Philosophy degree
					@elseif($generateexceldetail->program== 'D.V.M.')
						Doctorate in Vertinary Medicine
					@elseif($generateexceldetail->program== 'B.P.H.')
						Bachelor of Public Health degree
					@elseif($generateexceldetail->program== 'MBA.')
						Masters in Business Administration degree
					
					@else
						Diploma
					@endif 
					
					.
				 @if($generateexceldetail->gender == "MALE")
					He
				@else
					She
				@endif 
				has expressed the desire to work with your esteemed establishment as a National Service Person <br>for the 2014/2015
				National Service year.<br><br>The Counselling and Placement Centre encourages students to offer their services to
				 organisations which promote noble and life honouring values. I should therefore be grateful if you would grant 
				@if($generateexceldetail->gender == "MALE")
					him
				@else
					her
				@endif 
				the  opportunity to do
				@if($generateexceldetail->gender == "MALE")
					his
				@else
					her
				@endif 
				 <b>National Service</b> with you.<br><br>
				You may invite 
				@if($generateexceldetail->gender == "MALE")
					him
				@else
					her
				@endif  at your convenience for an interaction.<br>
				Please contact @if($generateexceldetail->gender == "MALE")
					him
				@else
					her 
				@endif on <b>{{$generateexceldetail->phone}} </b> or <b> {{$generateexceldetail->email}}.</b><br><br>
				
				Thank you.<br><br>

			</p>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<span style="margin-left:60px;">Yours faithfully,</span><br><br>
			<span style="margin-left:60px;">{{$signature->name}}</span> <br>
			<span style="margin-left:60px;"> For: Director.</span>
		</div>
	</div>
	<div class="row">
	<div class="col-md-3 col-md-offset-8 pull-right">
		
		<a id="editpagebutton" href="{{URL::to('dashboard/editexcel/'.$generateexceldetail->id)}}" class="btn btn-warning">edit info</a>
		
		<button onclick="myFunction()" id="printpagebutton" class="btn btn-primary">Print Letter</button>
		<a href="{{URL::to('dashboard/viewexcel/'.$generateexceldetail->level)}}" id="homepagebutton" class="btn btn-success">Go Home</a>
	</div>
	
</div>
</div>

<script type="text/javascript">
 function myFunction(){
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
