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

Route::get('/', 'Redfabcontroller@index');
Route::post('/registers','Redfabcontroller@register');
Route::get('detail/{i}', 'Redfabcontroller@Details');
Route::post('/logins','Redfabcontroller@login');
Route::post('/booking','Redfabcontroller@booking');
// Route::post('/notification','Redfabcontroller@notification');

 







// Route::get('/test', 'Testcontroller@index');
// Route::get('/form', 'Modalcontroller@insertform');
// Route::post('modes','Modalcontroller@sameeradd');
// // Route::post('modes',function(){
// // 	echo "hi";
// // });

// // Route::get("/student",function(){
// // 	return view('stud_create');
// // });

// // Route::post('/add','Modalcontroller@sameeradd');

// Route::get('/mod','Modalcontroller@index');



// Route::get('/insert','Modalcontroller@insertform');
// Route::post('/create','Modalcontroller@insert');

