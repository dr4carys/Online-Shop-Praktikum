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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout','Auth\LoginController@logoutUser')->name('user.logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login','AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login','AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('logout','AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('register','AdminController@create')->name('admin.create');
    Route::post('register','AdminController@store')->name('admin.store');
});

Route::get('test', function () {
    return "bramasta ganteng";
});

