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
    return view('home');
});

Route::get('/panel', function () {
    return view('layouts.panel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Админка
Route::group(['middleware' => ['auth', 'isadmin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');


    Route::resource('/categories', 'CategoryController');

    Route::get('/products/restore/{id}', 'ProductController@restore')->name('products.restore');
    Route::get('/products/trashed', 'ProductController@showTrashedProducts')->name('products.trashed');
    Route::resource('/products', 'ProductController');
});
