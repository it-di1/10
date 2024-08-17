<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
//
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
   return view('index');
});

Route::get('/gg', function () {
   return view('index');
});


Route::get('/data', function () {
  return view('input');
});

//جديد
//Route::get('/services/view', function () {
 //  return view('services.view');
 //});

 Route::get('/services/view', [ServiceController::class, 'view']);



Route::post('/hj', [ContactController::class,'data']);

Route::get('/input', function () {
    return view('input');
});

//
Route::get('/', [ServiceController::class, 'index']);

//Route::get('/', [CustomerController::class, 'index']);


Route::resource('services', ServiceController::class);

//Route::post('/services', [ServiceController::class, 'store'])->name('services.store');


Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');


Route::post('services', [ServiceController::class, 'store'])->name('services.store');

Route::get('/customers/view', [CustomerController::class, 'view'])->name('customers.view');

//Route::get('/customers/view', [CustomerController::class, 'view']);
Route::resource('customers', CustomerController::class);


Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
