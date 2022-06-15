<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
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


Auth::routes([
/*  'register' => false,*/ // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
/*Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);*/

Route::get('/', 'LandingController@index')->name('home');
Route::get('/product', 'PageController@product')->name('product');
Route::get('/story', 'PageController@story')->name('story');
Route::get('/sustainability', 'PageController@sustainability')->name('sustainability');
Route::get('/rewards', 'PageController@rewards')->name('rewards');


/* Customer management*/
    Route::get('/customer-login', 'CustomerController@login')->name('customer_login')->middleware('alreadyLoggedIn');
    Route::post('/customer-auth', 'CustomerController@login_auth')->name('customer_login_auth');
    Route::get('/customer-register', 'CustomerController@register')->name('customer_register')->middleware('alreadyLoggedIn');
    Route::get('/customer-dashboard', 'CustomerController@index')->name('customer_dashboard')->middleware('isLoggedIn');
    Route::get('/customer-profile', 'CustomerController@profile')->name('customer_profile')->middleware('isLoggedIn');
    Route::post('/customer-save', 'CustomerController@save')->name('customer_save');
    Route::post('/customer-update/{id}', 'CustomerController@update')->name('customer_update');
    Route::post('/reward-request', 'CustomerController@reward_request')->name('reward_request');
    Route::get('/customer-logout', 'CustomerController@logout')->name('customer_logout');
/* End Customer management*/

Route::get('sitemap', function () {
    SitemapGenerator::create('http://127.0.0.1:8000/')->writeToFile('sitemap.xml');
    return 'Sitemap Created';
});

// Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'],'namespace'=> 'admin'], function () {
//     Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
//     Route::get('user-table', 'AdminController@display_user_table')->name('admin.display_user_table');
//     Route::get('update-status/{id}', 'AdminController@edit_status')->name('admin.edit_status');
//     Route::delete('delete-user/{id}', 'AdminController@delete_user')->name('admin.delete_user');
//     Route::get('profile', 'AdminController@profile')->name('admin.profile');

// });

// Route::group(['prefix' => 'user', 'middleware' => ['user','auth'],'namespace'=> 'user'], function () {
//     Route::get('dashboard', 'UserController@index')->name('user.dashboard');
//     Route::get('profile', 'UserController@profile')->name('user.profile');
// });