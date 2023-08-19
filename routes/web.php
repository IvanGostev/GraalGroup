<?php

use App\Http\Middleware\Authenticate;
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
})->name('main')->middleware(Authenticate::class);

Auth::routes();



Route::group(['namespace' => 'App\Http\Controllers\Course', 'prefix' => 'courses', ], function () {
    Route::group(['namespace' => 'MyCourses', 'prefix' => 'my'], function () {
        Route::get('/', 'IndexController')->name('course.my.index');
    });
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('course.main.index');
        Route::get('/{course}', 'ShowController')->name('course.main.show');
    });


});
Route::group(['namespace' => 'App\Http\Controllers\Profile', 'prefix' => 'profile'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/{user}', 'ShowController')->name('profile.main.show');
        Route::get('/{user}/edit', 'EditController')->name('profile.main.edit');
        Route::patch('/{user}', 'UpdateController')->name('profile.main.update');
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


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
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
});

Route::group(['namespace' => 'App\Http\Controllers\Training', 'prefix' => 'training'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/course/{course}/lesson/{lesson}', 'ShowController')->name('training.main.show');
        Route::get('/course/{course}', 'FirstController')->name('training.main.first');
        Route::get('/course/{course}/homework/{hometask}', 'CreateController')->name('training.main.create');
        Route::post('/', 'StoreController')->name('training.main.store');
    });

});
Route::group(['namespace' => 'App\Http\Controllers\CheckHometask', 'prefix' => 'check-hometask'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/course/{course}', 'IndexController')->name('checkHometask.main.index');
        Route::get('/course/{course}/hometask/{hometask}', 'CreateController')->name('checkHometask.main.create');
        Route::patch('/course/{course}/hometask/{hometask}', 'UpdateController')->name('checkHometask.main.update');
    });

});
