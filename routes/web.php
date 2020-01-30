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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::view('/home', 'home');

Route::get('/realestates', 'RealestateController@index')->name('realestates');
Route::view('/owners', 'owners');
Route::resource('/ObjectType','ObjectTypeController');
Route::resource('/Equipment','EquipmentController');
Route::resource('/Disposition','DispositionController');
Route::resource('/Heating','HeatingController');
Route::resource('/Carpentry','CarpentryController');
Route::resource('/Kitchen','KitchenController');
Route::resource('/Bathroom','BathroomController');
Route::resource('/Accessories','AccessoriesController');
Route::resource('/Garage','GarageController');
Route::resource('/Provider','ProviderController');
Route::resource('/Terrace','TerraceController');
