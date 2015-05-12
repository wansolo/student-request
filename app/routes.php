<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('login');
	//$results = Excel::load('public/try.ods')->get();
	//var_dump($results->toArray());
});


Route::group(array('before' => 'auth'), function(){
	Route::get('dashboard/', array('as' => 'home', 'uses' => 'DashBoardController@index' ));

	Route::get('dashboard/addexcel', array('as' => 'addexcel', 'uses' => 'DashBoardController@addexcel' ));
	

	Route::post('dashboard/addtoexcel', array('as' => 'addtoexcel', 'uses' => 'DashBoardController@addtoexcel' ));
	
	Route::get('dashboard/viewexcel/{id}', array('as' => 'viewexcel', 'uses' => 'DashBoardController@viewexcel' ));
	Route::get('dashboard/viewallexcel', array('as' => 'viewallexcel', 'uses' => 'DashBoardController@viewallexcel' ));
	
	Route::get('dashboard/generateexcel/{id}', array('as' => 'generateexcel', 'uses' => 'DashBoardController@generateexcel' ));
	Route::get('dashboard/editexcel/{id}', array('as' => 'editexcel', 'uses' => 'DashBoardController@editexcel' ));
	Route::post('dashboard/updateexcel', array('as' => 'updateexcel', 'uses' => 'DashBoardController@updateexcel' ));
	Route::get('dashboard/search', array('as' => 'search', 'uses' => 'SearchController@search' ));
	Route::post('dashboard/search', array('as' => 'search', 'uses' => 'SearchController@executeSearch'));
	Route::get('dashboard/setsignatory', array('as' => 'setsignatory', 'uses' => 'DashBoardController@setsignatory'));
	Route::post('dashboard/signatory', array('as' => 'signatory', 'uses' => 'DashBoardController@signatory'));

	Route::get('dashboard/previewexcel/{id}', array('as' => 'previewexcel', 'uses' => 'PreviewController@previewexcel'));
	

});
	
	Route::get('register', array('as' => 'register', 'uses' => 'UserController@create' ));

	Route::post('register', array('as' => 'register', 'uses' => 'UserController@store' ));

	Route::get('login', array('as' => 'login', 'uses' => 'UserController@index' ))->before('guest');
	
	Route::post('login', array('as' => 'login', 'uses' => 'UserController@login' ));

	Route::get('logout', array('as' => 'logout', function () {
    		Auth::logout();
    		return Redirect::route('login')->with('flash_notice', 'You are successfully logged out.');
	}))->before('auth');