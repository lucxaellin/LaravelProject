<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/relationship', function () {
    return view('relationship');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/username_form', function () {
    return view('username_form');
});

Route::get('/user', function () {
    $username = request('username', 'Guest');
    return view('welcome', ['username' => $username]);
});
