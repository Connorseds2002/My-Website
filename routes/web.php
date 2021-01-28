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
Route::get('/collage', function () {
    return view('Collage');
});

Route::get('/collage/corses', function () {
    return view('corses');
});
Route::get('/collage/corses/bcot/L2-IT' , function () {
    return view('L2IT');
});
route::get('/collage/corses/bcot/L2-IT/Unit1', function () {
    return view('L2ITU1');
});