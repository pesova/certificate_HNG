<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('landing');
Route::post('/', 'HomeController@generate')->name('generate');
Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::get('/block/{id}', 'AdminController@block')->name('block');
Route::get('/enable/{id}', 'AdminController@enable')->name('enable');
Route::get('/settings', 'AdminController@settings')->name('settings.get');
Route::post('/settings', 'AdminController@saveSettings')->name('settings.save');
Route::post('generate-pdf', 'PDFController@generatePDF');
Route::get('/certificates/{id}', 'HomeController@showCertificate');
