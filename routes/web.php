<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => 'auth'],function(){

    Route::get('/home', 'HomeController@index')->name('admhome');
    Route::get('/', 'HomeController@index')->name('admhome');
    Route::get('/button', 'HomeController@buttons')->name('button');
    Route::get('/cards', 'HomeController@cards')->name('cards');
    Route::get('/tables', [HomeController::class,'tables'])->name('tables');
    Route::get('/404', [HomeController::class,'notfound'])->name('404');
});
