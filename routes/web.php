<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeIndexController@index');
Route::get('other/{id}/view-job','HomeIndexController@viewJob')->name('viewJob');
Route::get('other/search-view-job','SearchJobsController@index')->name('searchJobs.index');
Route::get('other/all-job','HomeIndexController@viewAllJob')->name('viewAllJob');
Route::get('other/{id}/jobs-category-view','HomeIndexController@viewAllJob')->name('jobsCategoryView');
Route::get('other/faq','HomeIndexController@viewFaq')->name('viewFaq');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('usersCvs', 'UsersCvController');
Route::resource('appliedJobs', 'AppliedJobsController');
Route::get('admin/auth/login', 'Auth\LoginController@showAdminLoginForm')->name('ad.login');
Route::get('admin/auth/register', 'Auth\LoginController@showAdminLoginForm')->name('ad.register');

//for jobs
//Route::resource('jobs', 'JobsController');
//Route::group(['middleware' => ['auth.admin']], function () {
//    Route::resource('jobs', 'JobsController');
//});

//for admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('jobs', 'Auth\JobsController');
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
});
