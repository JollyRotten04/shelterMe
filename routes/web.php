<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/properties', function () {
    return view('properties');
});

// Connect this to properties view so that data from properties can be passed to property view for dynamic displaying...
// Nilagay ko muna yung route statically para maaccess
Route::get('/view-property', function () {
    return view('viewProperty');
});

// Connect this to properties view so that data from properties can be passed to property view for dynamic displaying...
// Nilagay ko muna yung route statically para maaccess
Route::get('/view-comments', function () {
    return view('viewComments');
});

Route::get('/residential', function () {
    return view('residentialProperty');
});

Route::get('/about-us', function () {
    return view('aboutUs');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});
