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
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/product', function () {
    return view('catalog-product');
});

Route::get('/catalog-page', function () {
    return view('catalog-page');
});

Route::post('/search', function () {
    return view('widgets.search-results');
});
