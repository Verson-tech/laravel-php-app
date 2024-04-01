<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    // return "User is being loaded...";
    //once the route is created in the view folder named user.blade.php, the route will be loaded:
    return view('user');
});
