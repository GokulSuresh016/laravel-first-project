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
Route::get('/about/{id}',function ($id)
	{
		$data=[
		'message'=>'this is a message',
		'items'=>[
		'apple','mango','grapes'],
		'id'=>$id
		];
		
		return view('about',$data);
	});
Route::get('/post/{id}', 'postcontroller@index');