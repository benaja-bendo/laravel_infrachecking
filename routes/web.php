<?php

use App\Entite;
use App\Nuser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $countUser=\App\User::all()->count();
    return view('welcome',['count'=>$countUser]);
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/entite','EntiteController');
Route::post('/entite','EntiteController@login')->name('loginEntite');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-nUser',function (Request $request){
    return view('Gestion_users.registre_nuser');
})->name('nUser');

Route::post('/register-nUser',function (Request $request){

    $input = $request->all();
    $input['entite_id'] = 1;
    $input['image'] = "https://ui-avatars.com/api/?background=470000&color=fff&size=200&name=styveLioumba&font-size=0.50";

    $user = Nuser::create($input);
    return view('Gestion_users.registre_nuser');
})->name('nUser');

Route::resource('/nusers','NuserController');
//Route::get('/users','UsersController@index')->name('users.all');
Route::get('/users/json/{q?}','NuserController@allUser_json');
Route::get('/users/pdf','NuserController@createPDF');
Route::get('/users/export/', 'NuserController@export');

Route::get('/presences','PresencesController@index')->name('presences.index');
Route::get('/presences/json/{id?}','PresencesController@all');

Route::get('/permissions','PermissionsController@index')->name('permissions.index');
Route::patch('/permissions/{id}/{message}/{reponse}','PermissionsController@submit');
Route::get('/permissions/json/{id?}','PermissionsController@all');
Route::get('/permissions/jsonH/{id?}','PermissionsController@allH');

Route::get('/QR-code','QRcodeController@index')->name('QRcode.index');
Route::get('/QR-code/pdf','QRcodeController@createdpdf')->name('QRcode.index');
