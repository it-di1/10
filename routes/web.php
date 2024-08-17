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



 Route::get('/services/view', [ServiceController::class, 'view']);



Route::post('/hj', [ContactController::class,'data']);

Route::get('/input', function () {
    return view('input');
});

Route::get('/hj', function () {
  return view('hj');
});



Route::get('/', [ServiceController::class, 'index']);




Route::resource('services', ServiceController::class);



Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');


Route::post('services', [ServiceController::class, 'store'])->name('services.store');

Route::get('/customers/view', [CustomerController::class, 'view'])->name('customers.view');


Route::resource('customers', CustomerController::class);


Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');

Route::get('message', function () {

  $msg = DB::table('contacts')->get();

  return view('message', ['msg' => $msg]);
});;