<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// start of the frontend route

Route::get('/',[HomeController::class,'index'])->name('home1');
Route::get('/physics',[HomeController::class,'physics'])->name('physics');
Route::get('/tech',[HomeController::class,'technology'])->name('technology');
Route::get('/blog_detail/{id}',[HomeController::class,'blog_detail'])->name('blog_detail');
// end of the frontend route


// start of the backend route
Route::resource('setting', SettingController::class);
Route::resource('blog', BlogController::class);

// end of the backend route

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
