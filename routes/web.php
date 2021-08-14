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

Route::get('/', ['as'=>'home',  'uses'=>'Admin\IndexController@show']); //'middleware'=>'auth',

Route::get('/about', ['uses'=>'Admin\AboutController@show','as'=>'about']);

Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);//->name('articles');

Route::get('/article/{id}', ['middleware'=>'mymiddle:home' , 'uses'=>'Admin\Core@getArticle', 'as'=>'article']);//->middleware(['mymiddle']);


Route::get('/pages/add', 'Admin\CoreResource@add');
Route::resource('/pages', 'Admin\CoreResource');



Route::group(['middleware' => ['web']], function () {

});
