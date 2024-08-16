<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

 Route::get('/hj', function () {
     return view('hj');
});


Route::get('/data', function () {
    return view('input');
});

Route::post('/hj', [ContactController::class,'data']);

Route::get('/input', function () {
    return view('input');
});