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
// Route::namespace('Frontend')->group(function () {
//     Route::get('/login', 'Frontend\LoginController@showLoginForm');
//     Route::post('/login', 'LoginController@login')->name('user.login');
//     Route::group([
//         'middleware' => ['auth']
//     ], function () {
//         Route::get('/home', 'Home\HomeController@index');
//     });
// });
Route::group([
    'prefix' => '/',
    'namespace' =>'Frontend'
], function () {
    Route::any('','Home\HomeController@index')->name('nga.home');
});