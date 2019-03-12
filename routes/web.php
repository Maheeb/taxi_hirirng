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

Route::get('/', [
    'uses'=>'FrontController@index',
    'as'=>'front'
]);
Route::post('/join/success', [
    'uses' => 'FrontController@jn',
    'as'   => 'join.sucs'
]);




Auth::routes();

Route::group(['middleware' => 'auth'], function() {
// lots of routes that require auth middleware
    Route::get('/admin', 'HomeController@index')->name('admin');
    Route::resource('/admin/tariffs','TarifController');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');