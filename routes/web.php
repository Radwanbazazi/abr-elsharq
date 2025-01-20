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

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/service', function () {
    return view('service');
});
