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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('home');


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
	// Route::get('/dashboard', function () {
    // 	return view('admin.index');
	// });
	Route::get('/dashboard','HomeController@adminIndex')->name('admin.dashboard');

	/*transport*/
	Route::get('/transport','TransportController@index')->name("transport.index");
	Route::get('/transport-edit/{id}','TransportController@edit')->name('transport.edit');
	Route::post('/transport-update','TransportController@update')->name('transport.update');
	Route::get('/transport-delete/{id}','TransportController@destroy')->name('transport.destroy');
	/*product type insert*/
	Route::post('/transportinsert','TransportController@store');
	/*Driver*/
	Route::get('/driver','DriverController@index')->name('driver.index');
	/*driver insert*/
	Route::post('/driverinsert','DriverController@store');
	Route::get('/driver-edit/{id}','DriverController@edit')->name('driver.edit');
	Route::post('/driver-update','DriverController@update')->name('driver.update');
	Route::get('/driver-delete/{id}','DriverController@destroy')->name('driver.destroy');

	/*Transport Manager*/
	Route::get('/transportManager','TransportManagerController@index');
	/*Transport Manager insert*/
	Route::post('/transportManagerinsert','TransportManagerController@store');
	/*Transport Manager*/
	Route::get('/transportAssociate','TranaportAssociateController@index');
	/*Transport Manager insert*/
	Route::post('/transportAssociateinsert','TranaportAssociateController@store');
	/*Transport Manager*/
	Route::get('/transportSchodule','TransportscheduleController@index')->name('transport.schodule');
	/*Transport Manager insert*/
	Route::post('/transportSchoduleinsert','TransportscheduleController@store');
	Route::get('/transport-schodule-edit/{id}','TransportscheduleController@edit')->name('transport.schodule.edit');
	Route::post('/transport-schodule-update','TransportscheduleController@update')->name('transport.schodule.update');
	Route::get('/transport-schodule-delete/{id}','TransportscheduleController@destroy')->name('transport.schodule.destroy');


	/*complane*/
	Route::get('/admincomplane','ComplaneController@adminindex');
	
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/complane','ComplaneController@index');
Route::post('/complaneinsert','ComplaneController@store')->name('complaneinsert');
