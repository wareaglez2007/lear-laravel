<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
  $people = ['merry', 'dog'];  
   
   return view('pages.about')->with('people', $people); 
});

Route::get('portfolio', function(){
$name = ['herr'=> 'we goe'];
	return view('pages.portfolio', compact('name'));
});