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


Route::get('/xin-chao/{ten}/{nam}','MyControllers@getxinchao');
Route::get('/Grab/{ten}/{nam}','TestController@getGrab');

// Route::get('/xin-chao/{ho}/{ten}/{namsinh?}', function($ho,$ten, $namsinh='1999'){
// 	return 'Xin Chào bạn <b>'. $ho.'</b> <b>'. $ten. '</b><br> Năm sinh: <b>'. $namsinh.'<b>';
// })
// -> where(['ho'=> '[A-Z][a-z]+' , 'ten'=> '[A-Z][a-z]+' , 'namsinh'=>'[0-9]+']);

// Route::get('posts', function(){
//  return 'vi du cua chung ta la ....';
// })->name('posts');
Route :: get('chao/{user}',function($user){
	return view('hello-user',['user' =>$user]);
});
Route :: get('/chao1/{user}','hello@getchao');
Route :: get('chao2/{user}', function($user){
	return view('hello-user', compact('user'));
});
Route :: get('chao3/{user}', function($user){
	return view('hello-user')->with('user',$user);
});

Route:: get('login', 'MyController@GetLogin');
Route:: post('login', 'MyController@PostLogin');

Route::get('home',function()
{
	return view('home');
});

Route::get('master',function()
{
	return view('index');
});

Route:: get('schema/create-table', function(){
	Schema::create('users', function($table)
		{
			$table -> increments('id');
		});
});

Route:: get('schema/create-table', 'CreateTable@CreateTable');