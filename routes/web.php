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

Route::get('/test', 'TestController@test');

Route::get('/admin/home', function() {
    return view('admin.home');
});

Route::get('/admin/about', function() {
    return view('admin.about');
});

// Route for Article Controller

Route::get('/admin/article', [
    'uses' => 'ArticleController@index',
    'as' => 'admin.article.index'
]);
Route::get('/admin/article/create', [
    'uses' => 'ArticleController@create',
    'as' => 'admin.article.create'
]);

Route::get('/admin/article/{id}', [
    'uses' => 'ArticleController@show',
    'as' => 'admin.article.show'
]);


Route::post('/admin/article/store', [
    'uses' => 'ArticleController@store',
    'as' => 'admin.article.store'
]);

Route::get('/admin/article/edit/{id}', [
    'uses' => 'ArticleController@edit',
    'as' => 'admin.article.edit'
]);

Route::post('/admin/article/update/{id}', [
    'uses' => 'ArticleController@update',
    'as' => 'admin.article.update'
]);

Route::get('/admin/article/delete/{id}', [
    'uses' => 'ArticleController@destroy',
    'as' => 'admin.article.delete'
]);

//route for CategoryController

Route::get('/admin/category', [
    'uses' => 'CategoryController@index',
    'as' => 'admin.category.index'
]);

Route::get('/admin/category/create', [
    'uses' => 'CategoryController@create',
    'as' => 'admin.category.create'
]);
Route::post('/admin/category/store', [
    'uses' => 'CategoryController@store',
    'as'=> 'admin.category.store'
]);


