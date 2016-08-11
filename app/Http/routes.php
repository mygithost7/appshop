<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('as' => 'index', 'uses' => 'ClassifiedsController@index'));

// Search Route
Route::get('/search', 'ClassifiedsController@search');

// Static page home Route
Route::get('/home', 'ClassifiedsController@home');
// Static page partners Route
Route::get('/partners', 'StaticPagesController@partners');

// Static page agenda Route
Route::get('/agenda', 'StaticPagesController@agenda');

// Form page contact
Route::get('contact',
    ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'AboutController@store']);

//Classifieds routes
Route::resource('classifieds', 'ClassifiedsController');

//Categories routes
Route::resource('categories', 'CategoriesController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



// Admin Dashboard

Route::auth();

/*Route::get('/admin',function(){
    return view('admin.index');
});*/

/*Route::get('/home', 'HomeController@index');*/

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin',function(){
        return view('admin.index');
    });
    Route::resource('admin/users', 'AdminUsersController');

});




//Route::resource('admin/users', 'AdminUsersController');

/*Route::group(['middleware'=>'admin'], function(){

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/posts', 'AdminPostsController');

    Route::resource('admin/categories', 'AdminCategoriesController');

    Route::resource('admin/media', 'AdminMediasController');

});*/