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

Route::get('/guia-de-hierbas', function () {
    return view('guia-de-hierbas');
});

Route::get('/introduccion-a-los-microcontroladores-y-su-programacion', function () {
    return view('blog/intro-micro-progra');
});

Route::get('/control-de-motores-con-microcontroladores', function () {
    return view('blog/control-motor-micro');
});
