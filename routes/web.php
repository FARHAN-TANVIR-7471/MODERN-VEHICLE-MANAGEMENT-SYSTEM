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
*/
Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/password', function () {
    return view('admin.password');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function(){
	Route::get('/dashboard', function () {
    	return view('admin.index');
	});

	/*transport*/
	Route::get('/transport','TransportController@index');
	/*product type insert*/
	Route::post('/transportinsert','TransportController@store');
	/*Driver*/
	Route::get('/driver','DriverController@index');
	/*driver insert*/
	Route::post('/driverinsert','DriverController@store');
	/*Transport Manager*/
	Route::get('/transportManager','TransportManagerController@index');
	/*Transport Manager insert*/
	Route::post('/transportManagerinsert','TransportManagerController@store');
});

Route::get('/home', 'HomeController@index')->name('home');
