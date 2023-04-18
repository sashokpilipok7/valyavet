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
    return view('index');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/offerta', function () {
    return view('offerta');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/thanks', function () {
    return view('thanks');
});

