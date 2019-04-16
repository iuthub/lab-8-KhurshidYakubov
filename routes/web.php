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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('blog\index');
// });


Route::get('/', [
	'uses'=>'PostsController@index',
	'as'=>'index'
]);


Route::get('/admin', [
	'uses'=>'PostsController@adminIndex',
	'as'=>'adminindex'
]);




// Route::get('/post', function () {
//     return view('blog\post');
// });


Route::get('/post/{id}', [
	'uses'=>'PostsController@show',
	'as'=>'readmore'
]);


Route::get('/about', function () {
    return view('others\about');
});




// Route::get('/admin', function()
// {
//     return view('admin.index');
// });

Route::get('/admin/create', function()
{
    return view('admin.create');
})->name('admin.create');

//Route::get('/create', 'PostsController@store');

Route::resource('post', 'PostsController');

// Route::get('/admin/edit', function()
// {
//     return view('admin.edit');
// });

Route::get('/delete/{id}', [
	'uses'=>'PostsController@delete',
	'as'=>'delete'
]);


Route::get('/edit/{id}', [
	'uses'=>'PostsController@edit',
	'as'=>'edit'
]);


Route::post('/edit', [
	'uses'=>'PostsController@save',
	'as'=>'edit_post'
]);




