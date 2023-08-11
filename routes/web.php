<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
//    Route::get('/', 'IndexController');
//});


//Route::group(['namespace' => 'App\Http\Controllers\Course', 'prefix' => 'courses'], function () {
//    Route::group(['namespace' => 'Main'], function () {
//        Route::get('/', 'IndexController')->name('course.main.index');
//    });
//});

//Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal'], function () {
//    Route::group(['namespace' => 'Main'], function () {
//        Route::get('/', 'IndexController')->name('personal.main.index');
//    });
//});
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'courses'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
});
