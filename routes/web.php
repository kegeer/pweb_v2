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
    return view('pages.index');
});
Route::get('/ditu', function() {
    return view('ditu');
});
Route::get('/us', function() {
    return view('pages.us');
});
Route::get('/microbiome', function() {
    return view('pages.microbiome');
});
Route::get('/pathogen', function() {
    return view('pages.pathogen');
});

Route::get('/cooperation', function() {
    return view('pages.partner');
});

Route::get('/job', function() {
    return view('pages.hire');
});
Route::get('/baba', function() {
    return view('pages.mb.baba');
});
Route::get('/baby', function() {
    return view('pages.mb.baby');
});
