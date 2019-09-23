<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//here id represent dynamic parameter from browser
Route::get('/users/{id}', function($id){
	return 'This is user '.$id;
});

// Route::get('/test', function(){
// 	return view('pages.test');
// });

//routing using view
//directly access pages in view module
Route::view('/testView', 'pages.viewroutetest');

Route::get('test', 'TestsController@testPage');
Route::get('demovar', 'TestsController@variableExample');
Route::get('demo/{name}', 'TestsController@testFunc');