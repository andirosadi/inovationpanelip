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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/error', function(){
  return view('error-403');
});
Route::get('/reset', function(){
  return view('admin.resetpassword');
});
Auth::routes();
// Route::get('dashboard', 'HomeController');
Route::get('/evaluator', function(){
  return view('admin.evaluator');
});
Route::get('/c_evaluator', function(){
  return view('admin.c_evaluator');
});

Route::get('/inovator', function(){
  return view('admin.inovator');
});
Route::get('/inovation', function(){
  return view('inovator.inovasi');
});

// Route::group(['middleware'=>['Auth']],function(){
// //AdminController
//   Route::get('admin', 'AdminController@index')->name('admin.index');
//   Route::get('admin/create', 'AdminController@create')->name('admin.create');
//   Route::delete('admin/{admin}', 'AdminController@destroy')->name('admin.destroy');
//   Route::put('admin/{admin}', 'AdminController@update')->name('admin.update');
//   Route::get('admin/{admin}', 'AdminController@show')->name('admin.show');
//   Route::get('admin/{admin}/edit', 'AdminController@edit')->name('admin.edit');
// });

Route::resource('admin','AdminController');
Route::resource('evaluators','EvaluatorController');
Route::resource('inovasi','InovasiController');
Route::get('/c_inovasi', function(){
  return view('inovator.c_inovasi');
});
Route::get('/listrevisi', function(){
  return view('inovator.listrevisi');
});
Route::resource('resetpassword','ResetpasswordController');

// Route::get('inovasi/print', 'InovasiController@print');
// Route::get('print/{id}', 'PrintController@printInovasi');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
