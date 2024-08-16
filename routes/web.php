<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
//
use App\Http\Controllers\ServiceController;

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

Route::get('/input', function () {
    return view('input');
});

//
Route::get('/', [ServiceController::class, 'index']);


Route::resource('services', ServiceController::class);

//Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

// يعرض نموذج إدخال البيانات
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');

// يعالج بيانات النموذج عند تقديمه
Route::post('services', [ServiceController::class, 'store'])->name('services.store');

//
//Route::get('/view-services', [ServiceController::class, 'showServices'])->name('view.services');
Route::get('/services/view', [ServiceController::class, 'view']);


//Route::get('services', [ServiceController::class, 'index']); // For listing all services
Route::get('services/view', [ServiceController::class, 'view']); // For viewing services