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

Route::get('form_generation', function () {
    return view('add_generation');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member', 'membersController@getMember');
Route::get('/view_member/{id}', 'membersController@getView_member');
Route::post('add_member', function (Request $request){ // Get POST
    dd($request->all());
});//'membersController@Add_members');
