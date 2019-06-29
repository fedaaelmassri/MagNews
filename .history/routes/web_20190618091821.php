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
Route::namespace('Admin')->prefix('/admin/posts')->group(function(){
    Route::get('/','PostController@index') ;
    Route::get('/create','PostController@create')name('admin.posts.create'); ;
    Route::post('/store','PostController@store') ;
    Route::get('/{id}','PostController@edit')->name('admin.posts.edit');
    Route::put('/{id}','PostController@update') ;
    Route::put('/{id}','PostController@delete') ;
});
