<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users',usercontroller::class);

