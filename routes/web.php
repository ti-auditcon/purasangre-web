<?php

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
})->name('home');

Route::get('/conocenos', function () {
    return view('conocenos');
});

Route::get('/crossfit', function () {
    return view('crossfit');
});

Route::get('/frenetik', function () {
    return view('frenetik');
});

Route::get('/planes', function () {
    return view('planes');
});

Route::get('/horarios', function () {
    return view('horarios');
});

Route::get('/equipo', function () {
    return view('equipo');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/app', function () {
    return view('app');
});

Route::post('/enviado', 'MailController@sendmail')->name('ruta');
