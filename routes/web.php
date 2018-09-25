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
Route::group(['prefix'=>'admin','namespace' => 'Admin'], function(){
    Auth::routes();
    Route::get('/', 'Main@index')->name('dashboard');
});

Route::group(['namespace' => 'Front'], function(){
    Route::get('/', 'Main@index')->name('home');
    Route::get('/user-dashboard', 'Main@index')->name('userDashboard');
});
