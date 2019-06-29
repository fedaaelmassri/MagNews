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
Route::get('/aboutme/fedaa',function(){
    return 'Fedaa El-massri';
});
Route::get('/contact',function(){
    return[
        'name'=>'Fedaa',
        'job'=>'Developer',
    ];
});
Route::get('/','PostController@index')->name('home');
Route::get('/posts/{id}','PostController@view')->name('posts.view');
Route::namespaceprefix('admin/posts')('Admin')->name('admin.posts')->group(function() {
	Route::get('/', 'PostsController@index')->name('');
	Route::get('/create', 'PostsController@create')->name('.create');
	Route::post('/', 'PostsController@store')->name('.store');
	Route::get('/{id}', 'PostsController@edit')->name('.edit');
	Route::put('/{id}', 'PostsController@update')->name('.update');
	Route::delete('/{id}', 'PostsController@delete')->name('.delete');
});