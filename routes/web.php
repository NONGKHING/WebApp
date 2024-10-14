<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/backend', function () {
//     return view('backend');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function (){

    Route::get('/dashboard', function () {
        return view('backend');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/userdata', function () {
        return view('userdata');
    })->name('userdata');

    Route::get('/adduser', function () {
        return view('adduser');
    })->name('adduser');
    

    Route::get('/edituser/{id}', function ($id) {
        return view('edituser',compact('id'));
    })->name('edituser');


});
