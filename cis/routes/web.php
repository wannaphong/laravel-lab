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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'membersController@index2');

Auth::routes();

Route::get('form_generation', function () {
    return view('add_generation');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member', 'membersController@getMember');
Route::get('/view_member/{id}', 'membersController@getView_member');
Route::get('/view_y/{id}', 'membersController@getView_year');
Route::post('add_member', 'membersController@Add_members');
Route::post('add_generation', 'membersController@postGen');
