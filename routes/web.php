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


Route::get('/xin-chao-ban/{ten}/{lop?}', function($ten, $lop='17CDTH'){
	return 'Xin Chào bạn <b>'. $ten. '</b><br> Lớp: <b>'. $lop.'<b>';
});
Route::get('/xin-chao/{ho}/{ten}/{namsinh?}', function($ho,$ten, $namsinh='1999'){
	return 'Xin Chào bạn <b>'. $ho.'</b> <b>'. $ten. '</b><br> Năm sinh: <b>'. $namsinh.'<b>';
})
-> where(['ho'=> '[A-Z][a-z]+' , 'ten'=> '[A-Z][a-z]+' , 'namsinh'=>'[0-9]+']);