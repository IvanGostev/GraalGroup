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
})->name('main');

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


Route::group(['namespace' => 'App\Http\Controllers\Course', 'prefix' => 'courses'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('course.main.index');
//        Route::get('/{course}', 'ShowController')->name('course.main.show');
//        Route::get('/create', 'CreateController')->name('course.main.create');
//        Route::post('/', 'StoreController')->name('course.main.store');
//        Route::get('/{course}/edit', 'EditController')->name('course.main.edit');
//        Route::patch('/{course}', 'UpdateController')->name('course.main.update');
//        Route::delete('/{course}', 'DestroyController')->name('course.main.destroy');
    });

});

Route::group(['namespace' => 'App\Http\Controllers\Teach', 'prefix' => 'teach'], function () {
    Route::group(['namespace' => 'Course',], function () {
        Route::get('/', 'IndexController')->name('teach.course.index');
        Route::get('/create', 'CreateController')->name('teach.course.create');
        Route::post('/', 'StoreController')->name('teach.course.store');
        Route::get('/{course}/edit', 'EditController')->name('teach.course.edit');
        Route::patch('/{course}', 'UpdateController')->name('teach.course.update');
        Route::delete('/{course}', 'DestroyController')->name('teach.course.destroy');
    });
    Route::group(['namespace' => 'Lesson', 'prefix' => 'lessons'], function () {
        Route::get('/{course}/create', 'CreateController')->name('teach.lessons.create');
        Route::get('/{thisLesson}/course/{course}/edit', 'EditController')->name('teach.lessons.edit');
        Route::post('/', 'StoreController')->name('teach.lessons.store');
        Route::patch('/{lesson}', 'UpdateController')->name('teach.lessons.update');
        Route::delete('/{course}', 'DestroyController')->name('teach.lessons.destroy');
    });
    Route::group(['namespace' => 'Hometask', 'prefix' => 'hometasks'], function () {
        Route::get('/{course}/create', 'CreateController')->name('teach.hometask.create');
        Route::get('/{thisHometask}/course/{course}/edit', 'EditController')->name('teach.hometask.edit');
        Route::post('/', 'StoreController')->name('teach.hometask.store');
        Route::patch('/{hometask}', 'UpdateController')->name('teach.hometask.update');
        Route::delete('/{course}', 'DestroyController')->name('teach.hometask.destroy');
    });
});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
//    Route::group(['namespace' => 'Coursre', 'prefix' => 'courses'], function () {
//        Route::get('/', 'IndexController')->name('admin.user.index');
//        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
//    });
});
