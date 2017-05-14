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
    return view('auth/login');
});


Route::get('/register_user','Auth\LoginController@insert');

Auth::routes();

/**********Home page routes**************/
Route::get('/home', 'HomeController@index');


/*Show all videos**/

Route::get('/video','VideoController@index');

