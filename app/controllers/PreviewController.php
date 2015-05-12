<?php

class PreviewController extends \BaseController {
public function previewexcel($id){

       
        
        $excel = New ExcelStudent;
        $generateexceldetail = $excel::where("id",$id)->first();
        $type = $generateexceldetail->type;
        $program = $generateexceldetail->program;
        $level = $generateexceldetail->level;




        $generateexceldetail->flag = "Printed";
        $generateexceldetail->save();

        $signature = Signature::where('id','=',1)->first();

        if($type == "Attachment" AND $level == 100 AND $program != "BSc." AND $level != 500 AND $level != 600 AND $level != 200 AND $level != 300 AND $level != 400){
           // dd($generateexceldetail->course1);
            return View::make('dashboard.preview2')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
            
        }
        elseif ($type == "Attachment" AND $level != 500 AND $level != 600 ) {
            //dd($generateexceldetail->toArray());
            return View::make('dashboard.preview')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
            
        }

        elseif ($type == "Service") {
            //dd($generateexceldetail);
            return View::make('dashboard.preview1')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
        }
        elseif ($type == "Attachment" AND $program != "B.A." AND $level == 500 OR $level == 600 ) {
            //dd($generateexceldetail);
            return View::make('dashboard.preview3')->with('generateexceldetail',$generateexceldetail)->with('signature',$signature);
            
        }
    
        

        
}
}