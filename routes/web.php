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
       /*$user=\App\Models\User::first();
       dd($user->roles()->where('name','admin')->exists());*/
});

Route::get('/home','\App\Http\Controllers\restoreController@index');
Route::get('/blog','\App\Http\Controllers\restoreController@blog');
Route::get('/about-us','\App\Http\Controllers\restoreController@about');
Route::get('/contact-us','\App\Http\Controllers\restoreController@contact');
Route::get('/services','\App\Http\Controllers\restoreController@service');
Route::get('/home','\App\Http\Controllers\restoreController@getUserAdmin');




Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/Admin','\App\Http\Controllers\getController@userInfo')->name('Admin')->middleware(['auth','verified']);
    Route::get('/info','\App\Http\Controllers\getController@create')->name('info');
    Route::post('/info','\App\Http\Controllers\getController@store')->name('infos');
});