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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','UsersController@index')->name('users.all');
Route::get('/users/json/{q?}','UsersController@allUser_json');
Route::get('/users/pdf','UsersController@createPDF');
Route::get('/users/export/', 'UsersController@export');

Route::get('/presences','PresencesController@index')->name('presences.index');

Route::get('/permissions','PermissionsController@index')->name('permissions.index');

Route::get('/QR-code','QRcodeController@index')->name('QRcode.index');
Route::get('/QR-code/pdf','QRcodeController@createdpdf')->name('QRcode.index');
