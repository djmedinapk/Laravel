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

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('user','UsersController');
    Route::get('user/{id}/delete',['uses' => 'UsersController@delete','as' => 'user.delete']);

    Route::resource('category','CategoriesController');
    Route::get('category/{id}/delete',['uses' => 'CategoriesController@delete','as' => 'category.delete']);

    Route::resource('tag','tagsController');
    Route::get('tag/{id}/delete',['uses' => 'tagsController@delete','as' => 'tag.delete']);

    
});

//Auth::routes();
// Authentication Routes...
/*
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/

Route::get('admin/auth/login', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'admin.auth.logout'
]);
