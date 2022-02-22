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
});


Route::get('/', function () {
    return view('home');
});


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard__doctors-add', function () {
    return view('dashboard__doctors-add');
});

Route::get('/dashboard__doctors', function () {
    return view('dashboard__doctors');
});

Route::get('/dashboard__appointments', function () {
    return view('dashboard__appointments');
});


Route::get('/dashboard__patients', function () {
    return view('dashboard__patients');
});
