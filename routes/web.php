<?php

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/about', 'App\Http\Controllers\AboutController@about');
Route::get('/posts', 'App\Http\Controllers\PostsController@posts');
Route::get('/create', 'App\Http\Controllers\PostsController@createposts');
Route::get('/delete-post', 'App\Http\Controllers\PostsController@delete_posts');
Route::get('/post', 'App\Http\Controllers\PostsController@post');











//Route::get('/', [HomeController::class, 'index']);
//Route::get('/posts', [PostsController::class, 'posts']);

// Route::get('/about', function () {
    //return view('welcome');
   // return ('This is the about page');
//});
