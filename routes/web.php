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



Route::get('/login', function () {
    return view('login');
});


Route::group(['middleware' =>['auth','ceklevel:Admin']], function () {
Route::get('/admin1/home', 'AdminController@home')->name('admin.home');
Route::get('/admin1/inventaris/index', 'InventarisController@index')->name('inventaris.index');
Route::get('/admin1/inventaris/create', 'InventarisController@create')->name('inventaris.create');
Route::post('/admin1/inventaris/index', 'InventarisController@store')->name('inventaris.store');
Route::get('/admin1/inventarisEdit/{id}', 'InventarisController@edit')->name('inventaris.edit');
Route::put('/admin1/inventaris/Update/{id}', 'InventarisController@update')->name('inventaris.update');
Route::delete('/admin1/InventarisDelete/{id}', 'InventarisController@destroy')->name('inventaris.destroy');
});

//register
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
//cust
Route::get('/', 'CustomersController@index')->name('index');
Route::group(['middleware' =>['auth','ceklevel:User']], function () {
Route::get('/customer/inventaris', 'CustomersController@inventaris')->name('customer.inventaris') ;
Route::get('/customer/detail/{id}', 'CustomersController@show')->name('show');
});

Route::get('/customer/visi', 'CustomersController@visi')->name('customer.visi') ;
Route::get('/customer/about', 'CustomersController@about')->name('customer.about') ;

Route::get('/inventaris/{cari}', 'CustomersController@cari');
Route::get('/inventaris/{search}', 'CustomersController@search');

//Route Login
Route::get('/login', 'AuthController@showFormLogin')->name('login');
Route::post('/login', 'AuthController@login')->name('');
//admin1
// Route::group(['middleware' => ['auth','ceklevel:Admin']], function () {
Route::get('/admin1/home', 'AdminController@home')->name('admin.home');
Route::get('/admin1/anggota/index', 'AnggotaController@index')->name('anggota.index');
Route::delete('/admin1/anggotaDelete/{id}', 'AnggotaController@destroy')->name('anggota.destroy');


Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');




Route::get('/customer/detail/download/{file}', 'InventarisController@download')->name("downloadFile");