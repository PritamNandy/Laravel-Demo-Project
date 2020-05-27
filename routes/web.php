<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', 'PageController@index');

Route::view('/about','about',['title' => 'About'])->name('about');

Route::view('/services','/services/services',['title' => 'Web Services']);

route::get('/','JobController@index');
route::get('/jobs/{id}','JobController@show')->name('jobs.show');
//route::get('/','QuoteController@index');
route::get('/quotes/show','QuoteController@showQuotes')->name('quotes.show');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profileUpdate', 'ProfileController@profileUpdate')->name('profileUpdate');
Route::get('/avatarchange','ProfileController@avatarChange')->name('avatarchange');
Route::post('/updateavatar','ProfileController@updateAvatar')->name('updateavatar');
Route::get('/profile','ProfileController@index')->name('profile');
Route::get('/changepassword','changePasswordController@index')->name('changepassword');
Route::post('/updatepassword','changePasswordController@changePassword')->name('updatepassword');
Route::resource('/dashboard', 'DashboardController');