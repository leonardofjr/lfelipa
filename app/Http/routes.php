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


Route::get('/', 'PagesController@getHomepage');
Route::post('/contact', 'FormsController@postContact');

// ** Admin** 
Route::group(['middleware' => 'auth'], function() {

    // ** Page Routes //
    Route::get('admin/profile', 'AdminUserControlPanel@getProfilePage');
    Route::get('admin/work', 'AdminUserControlPanel@getWorkPage');
    Route::get('admin/work/add', 'AdminUserControlPanel@getAddWorkPage');
    Route::get('admin/work/edit/{id}', 'AdminUserControlPanel@getEditWorkPage');


    // **  Routes //
    Route::post('admin/work/add-new-work-post', 'AdminUserControlPanel@addNewWorkPost');
    Route::put('admin/work/edit/update-work-post/{id}', 'AdminUserControlPanel@updateWorkPost');
    Route::delete('admin/work/delete/{id}', 'AdminUserControlPanel@deleteWorkPost');
   // Route::get('admin/user-panel/gallery/upload',  ['as' => 'Upload', 'uses' => 'AdminGalleryController@getGalleryUploadPage']);
    //Route::get('admin/user-panel/gallery/edit/{id}',  ['as' => 'Edit', 'uses' => 'AdminGalleryController@getGalleryEditPage']);
    //Route::get('admin/user-panel/gallery',  ['as' => 'Gallery', 'uses' => 'AdminGalleryController@getGalleryPage']);
});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');