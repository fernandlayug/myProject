<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/test/testpage', function () {
    return view('test');
});



Route::get('ID/{id}', function ($id) {
    return 'ID: ' .$id;
});

Route::get('ID/{id?}', function($id = null){
return $id;
});

Route::get('/', function () {
    return view('welcome');
});


*/


Route::get('/', 'MyController@index');
Route::get('/about', 'MyController@about');
Route::get('/service', 'MyController@services');


Route::resource('posts', 'PostController');

