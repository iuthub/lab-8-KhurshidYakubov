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
	'uses'=>'PostsController@index',
	'as'=>'index'
]);


Route::get('/admin' , 'PostsController@adminIndex')->name('admin');


Route::get('/post/{id}', [
	'uses'=>'PostsController@show',
	'as'=>'readmore'
]);


Route::get('/about', function () {
    return view('others\about');
});



Route::get('/admin/create', function()
{
    return view('admin.create');

})->name('admin.create');



Route::resource('post', 'PostsController');


Route::get('/delete/{id}', [
	'uses'=>'PostsController@delete',
	'as'=>'delete'
]);


Route::get('/edit/{id}', [
	'uses'=>'PostsController@edit',
	'as'=>'edit'
]);



Route::any('/update/{id}', [
	'uses'=>'PostsController@update',
	'as'=>'update'
]);





