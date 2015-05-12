
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
			<center><h4>{{$generateexceldetail->last_name}}, {{"   "}} {{$generateexceldetail->first_name}} {{" "}} {{$generateexceldetail->middle_name}} </h4></center>
			<center><h4>{{$generateexceldetail->program}} ( 
					@if($generateexceldetail->combination_type == 'SINGLE MAJOR' AND $generateexceldetail->level != 100)
					<?php echo strtoupper($generateexceldetail->first_major); ?>
						
					@elseif($generateexceldetail->combination_type == 'MAJOR MINOR' AND $generateexceldetail->level != 100)

						<?php echo strtoupper($generateexceldetail->first_major); ?>{{" "}} WITH {{" "}} <?php echo strtoupper($generateexceldetail->second_major); ?>
					@elseif($generateexceldetail->combination_type == 'COMBINED MAJOR' AND $generateexceldetail->level != 100)
						<?php echo strtoupper($generateexceldetail->first_major); ?>{{" "}} AND {{" "}} <?php echo strtoupper($generateexceldetail->second_major); ?>
					@else
						<?php echo strtoupper($generateexceldetail->course4); ?>
					
					@endif 
					)
			</h4></center>
			<center><h4>LEVEL {{$generateexceldetail->level}}</h4></center>

		</div>

		
		
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
			<p style="margin-left:60px;">
				This is to certify that the above named is  
				@if($generateexceldetail->level == 400)
					final year
				@elseif($generateexceldetail->level == 300)
					third year
				@elseif ($generateexceldetail->level == 200)
					second year
				@else
					first year
				@endif 
				 student of this University,<br> reading for the 
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
						Master Arts degree
					@elseif($generateexceldetail->program== 'MSc.')
						Master of Science degree
					@elseif($generateexceldetail->program== 'MPhil.')
						Master of Philosophy degree
					@elseif($generateexceldetail->program== 'D.V.M.')
						Doctorate In Vertinary Medicine
					@elseif($generateexceldetail->program== 'B.P.H.')
						Bachelor of Public Health degree
					@elseif($generateexceldetail->program== 'MBA.')
						Masters in Business Administration degree
					
					@else
						Diploma
					@endif
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
				@endif on <b>{{$generateexceldetail->phone}}</b> or <b> <?php echo strtolower($generateexceldetail->email); ?></b><br>
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
		<button onclick="myFunction()" id="printpagebutton" class="btn btn-primary">Print Letter</button>
		<a href="{{URL::to('dashboard/viewexcel')}}" id="homepagebutton" class="btn btn-success">Go Home</a>
	</div>
	
</div>
</div>



<script>
function myFunction() {
    
        var printButton = document.getElementById("printpagebutton");
        var homeButton = document.getElementById("homepagebutton");
        
        printButton.style.visibility = 'hidden';
        homeButton.style.visibility = 'hidden';
        window.print()
       
        printButton.style.visibility = 'visible';
        homeButton.style.visibility = 'visible';
}
</script>

</body>
</html>
