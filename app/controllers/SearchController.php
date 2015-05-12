<?php

class SearchController extends \BaseController {

	public function executeSearch()
    {
        $keywords = Input::get('keywords');
      
        $students = ExcelStudent::all();

        $searchStudents=new \Illuminate\Database\Eloquent\Collection();

        foreach($students as $u)
        {
            if(Str::contains($u->student_number,$keywords))
                $searchStudents->add($u);
        }

        return View::make('dashboard.searchStudent')->with('searchStudents',$searchStudents);
    }
    public function search(){
        return View::make('dashboard.search');
    }
}
