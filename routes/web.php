<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
   return view('index');
});

Route::get('/gg', function () {
   return view('index');
});


Route::get('/data', function () {
  return view('input');
});

 Route::post('/hj', [ContactController::class,'data']);

 
 //Route::post('/hj', [ContactController::class,'data']);