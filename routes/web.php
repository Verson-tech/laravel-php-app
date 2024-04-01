<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//capturing the user details:
Route::get('/user/{id}', function($id){
    return "User $id";
});
