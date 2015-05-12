<?php

use SimpleExcel\SimpleExcel;

class DashBoardController extends BaseController {

/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){
		return View::make('dashboard.users');

	}
	public function addexcel(){

		return View::make('dashboard.addexcel');

		}

public function addtoexcel(){
	
	$rules = array(
			'file_name' => 'required',
			
			

		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('dashboard/addexcel')->withErrors($validator)->withInput();
		}
		else{
			  if (Input::file('file_name')->isValid()) {
			$file_name = Input::file('file_name');
		
		      $destinationPath = 'upload'; // upload path
		      $extension = Input::file('file_name')->getClientOriginalExtension(); // getting file extension
		      $fileName = date("Y-m-d h-i-sa").'.'.$extension; // renameing file
		      $file_name->move($destinationPath, $fileName); // uploading file to given path

		 
     		$results = Excel::load('public/upload/'.$fileName)->get();

		    //$results->toArray(); 
		
		    //foreach ($results as $key => $value1) {
		    	foreach ($results as $key => $value) {
		    	$item = new ExcelStudent;
		    	$item->student_number = $value->indexnumber;
				$item->first_name = strtoupper($value->firstname);
				$item->email = $value->email;
				$item->gender = $value->gender;
				$item->last_name = strtoupper($value->surname);
				$item->middle_name = strtoupper($value->middlename);
				$item->phone = $value->phone;
				$item->program = $value->programme;
				$item->first_major = ucfirst($value->firstmajor);
				$item->second_major = ucfirst($value->secondmajor);
				$item->course1 = ucfirst($value->firstcourse);
				$item->course2 = ucfirst($value->secondcourse);
				$item->course3 = ucfirst($value->thirdcourse);
				$item->course4 = ucfirst($value->programmeoffered);
				$item->course5 = ucfirst($value->areaofstudy);
				
				$item->combination_type = $value->combination;
				$item->receipt_number = $value->receipt;
				$item->nss = $value->nss;
				$item->date = $value->date;
				$item->level = $value->level;
				$item->copy = $value->copies;
				$item->type = $value->requesttype;
				$item->flag = "Pending";
				$item->save();
		    	}
		     	
		    // } 
		  



		
			
			
			Session::flash('message', 'Successfully Added to Database!');
			return Redirect::to('dashboard/addexcel');
		}
		else{
			Session::flash('message', 'Error Occured!');
			return Redirect::to('dashboard/addexcel');
		}
						
		}
	}

	public function viewexcel($id){
		if($id == 500){
			$excel = New ExcelStudent;
		$exceldetail = $excel::where('flag','Pending')->where('level','>',400)->paginate(15);

		
		return View::make('dashboard.viewexcel')->with('exceldetail',$exceldetail)->with('level','Graduate Student');

		}else{
			$excel = New ExcelStudent;
		$exceldetail = $excel::where('flag','Pending')->where('level',$id)->paginate(15);

		
		return View::make('dashboard.viewexcel')->with('exceldetail',$exceldetail)->with('level',$id);

		}
		
		}

	public function viewallexcel(){
		$excel = New ExcelStudent;
		$exceldetail = $excel::where('flag','Printed')->paginate(15);

		
		return View::make('dashboard.viewallexcel')->with('exceldetail',$exceldetail);

		}
	public function generateexcel($id){
		$excel = New ExcelStudent;
		$generateexceldetail = $excel::where("student_number",$id)->first();
		$type = $generateexceldetail->type;
        $program = $generateexceldetail->program;
        $level = $generateexceldetail->level;




		$generateexceldetail->flag = "Printed";
		$generateexceldetail->save();

		$signature = Signature::where('id','=',1)->first();
		
		if ($type == "Attachment" AND $level == 100 AND $program != "BSc." AND $level != 500 AND $level != 600 AND $level != 200 AND $level != 300 AND $level != 400  ) {
			
			return View::make('dashboard.ba')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
		
		}elseif($type == "Attachment" AND $level != 500 AND $level != 600){
			//dd($generateexceldetail);
			return View::make('dashboard.attachment')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
			
		}elseif ($type == "Attachment" AND $program != "B.A." AND $level == 500 OR $level == 600 ) {
            return View::make('dashboard.master')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
            
        }

		elseif ($type == "service") {
			return View::make('dashboard.service')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
		}
	
		

		}
		
public function editexcel($id){
		
		$exceldetail = ExcelStudent::where('id','=',$id)->first();
		return View::make('dashboard.editexcel')->with('detail',$exceldetail);

		}


public function updateexcel(){
	
	$rules = array(
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'type' => 'required',
			'level' => 'required',
			
			

		);

		$validator = Validator::make(Input::all(), $rules);
		$id = Input::get('excel_id');
		$idd = Input::get('id');

		if($validator->fails()){
			return Redirect::to('dashboard/editexcel/'.$idd)->withErrors($validator)->withInput();
		}
		else{
			  
		    	$item = ExcelStudent::find($id);
		    	
				$item->first_name = Input::get('first_name');
				$item->email =Input::get('email');
				$item->last_name = Input::get('last_name');
				$item->middle_name = Input::get('middle_name');
				$item->phone = Input::get('phone');
				$item->first_major = Input::get('first_major');
				$item->second_major = Input::get('second_major');
				$item->course1 = Input::get('course1');
				$item->course2 = Input::get('course2');
				$item->course3 = Input::get('course3');
				$item->course4 = Input::get('course4');
				$item->program = Input::get('program');
				$item->level = Input::get('level');
				$item->type = Input::get('type');
				$item->save();
		  
			Session::flash('flash_notice', 'Successfully Updated Student Record!');
			return Redirect::to('dashboard/previewexcel/'.$id);
						
		}
	}

	public function signatory(){

	$rules = array(
			'name' => 'required',
			);

		$validator = Validator::make(Input::all(), $rules);
		

		if($validator->fails()){
			return Redirect::to('dashboard/signatory')->withErrors($validator)->withInput();
		}else{
			$signature = Signature::where('id','=',1)->first();
			//dd($signature->toArray());
			$signature->name = Input::get('name');
			$signature->save(); 
			return Redirect::to('dashboard/viewexcel');
		}
		
	}
	public function setsignatory(){
		return View::make('dashboard/signature');
	}

	public function deleteexcel(){
		$detail = ExcelStudent::where('flag','=','Printed')->delete();
		//$detail->delete();
		Session::flash('flash_notice', 'Successfully Deleted Student Records From System !!');
		return Redirect::to('dashboard/');
						

	}

	
}