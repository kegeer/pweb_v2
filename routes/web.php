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


Route::get('/', function() {
    return view('index');
});
Route::get('/us', function() {
    return view('us');
});
Route::get('/microbiome', function() {
    return view('microbiome');
});
Route::get('/pathogen', function() {
    return view('pathogen');
});

Route::get('/partner', function() {
    return view('partner');
});

Route::get('/hire', function() {
    return view('hire');
});
Route::get('/baba', function() {
    return view('mb.baba');
});
Route::get('/baby', function() {
    return view('mb.baby');
});
Route::get('/obesity', function() {
    return view('mb.obesity');
});
Route::get('/ditu', function() {
    return view('ditu');
});
