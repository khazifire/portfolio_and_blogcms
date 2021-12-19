<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers;


/*
instead of manually calling each route, i used the resource feature of laravel, to get all the neccessary routes include in the PostsController
*/

Route::get('/', [PagesController::class,'index']);
Route::resource('/blog', PostsController::class);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();




