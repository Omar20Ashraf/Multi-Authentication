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

Route::get('/home', 'HomeController@index')->name('home');


// Admin Authentication Routes...

Route::get('admin/home', 'AdminController@index')->name('admin.home');

Route::get('admin/editor', 'EditorController@index')->name('admin.editor');



Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('admin', 'Admin\LoginController@login');

// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');

Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('Verify/{email}/{verifyToken}','Auth\RegisterController@sendingEmail')->name('sendingEmail');