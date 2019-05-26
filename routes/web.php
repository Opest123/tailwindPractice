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
    return view('files.index');
});

Route::get('sitebot', function () {
    return view('files.sitebot');
});

Route::get('statusfy', function () {
    return view('files.statusfy');
});

